<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use App\Models\User;
use App\Models\Approval;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
use Redirect;

class PropertyController extends Controller
{
    public function homepopulate(){
        $propertyapproval = Approval::where('status_of_approval', 'approved')->get();
        $properties = [];

        $availableproperties = Property::where('status', 'available')->get();
        foreach ($availableproperties as $availables) {
            foreach ($propertyapproval as $approved) {
                if ($approved->property_id == $availables->id) {
                    $properties = Property::where('id', $approved->property_id)->get();
                }
            }
        }

        foreach ($properties as $property) {
            $agentinfo = Agent::where('id', $property->agent_id)->first();
    
            if ($agentinfo != null) {
                $property->agentinfo = $agentinfo;
            }
        }
        
        return view('home.home', compact('properties'));
    }

    public function propertyinfo(Request $request){
        $id = $request->query('id');
        $property = Property::where('id', $id)->first();
        $propertyagentinfo = Agent::where('id', $property->agent_id)->first();

        return view('customer.propertyinfo', compact('property', 'propertyagentinfo'));

    }

    public function create(){
        return view('property.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'price' => 'required|numeric',
            'propertytype' => 'required',
            'address' => 'required',
            'description' => 'required',
            'rooms' => 'required',
            'sqm' => 'required|numeric',
            'cr' => 'required',
            'parking' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $property = new Property();
        $agentinfo = Agent::where('user_id', auth()->id())->first();
        $property->agent_id = $agentinfo->id;

        $property->price = $validatedData['price'];
        $property->address = $validatedData['address'];
        $property->property_type = $validatedData['propertytype'];
        $property->description = $validatedData['description'];
        $property->rooms = $validatedData['rooms'];
        $property->sqm = $validatedData['sqm'];
        $property->cr = $validatedData['cr'];
        $property->parking = $validatedData['parking'];
        $property->status = 'available';

        $property->save();

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $image->move('storage', $filename);
                $imagePaths[] = 'storage/' . $filename;
            }
        }

        //dd($imagePaths);
        // Save the image paths in the database as a comma-separated string
        $property->image_path = implode(',', $imagePaths);
        $property->save();

        $selectproperty = Property::where('description', $property->description)->first();

        $approval = new Approval();
        $approval->admin_id = 1;
        $approval->property_id = $selectproperty->id;
        $approval->status_of_approval = 'pending';
        $approval->save();

        // Redirect back with a success message
        return redirect()->route('agent.dashboard')->with('successproperty', true);
    }

    public function edit($id){
        $property = property::find($id);

        return View('property.edit', compact('property'));
    }

    public function update(Request $request, $id){
        $property = Property::find($id);

        $validatedData = $request->validate([
            'price' => 'required|numeric',
            'propertytype' => 'required',
            'address' => 'required',
            'description' => 'required',
            'rooms' => 'required',
            'sqm' => 'required|numeric',
            'cr' => 'required',
            'parking' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
            'status' => 'required'
        ]);

        $property->price = $validatedData['price'];
        $property->address = $validatedData['address'];
        $property->property_type = $validatedData['propertytype'];
        $property->description = $validatedData['description'];
        $property->rooms = $validatedData['rooms'];
        $property->sqm = $validatedData['sqm'];
        $property->cr = $validatedData['cr'];
        $property->parking = $validatedData['parking'];
        $property->status = $validatedData['status'];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $image->move('storage', $filename);
                $imagePaths[] = 'storage/' . $filename;
            }
        }

        $property->save();
        return redirect()->route('agent.dashboard');
    }

    public function delete($id){
        property::destroy($id);
        return redirect()->route('agent.dashboard');
    }
}
