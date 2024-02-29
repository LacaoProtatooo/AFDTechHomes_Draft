<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    // Index
    public function index()
    {
        $user = auth()->user();
        if($user != NULL){
            $agentinfo = Agent::where('user_id', $user->id)->first();
        }
        $properties = Property::where('agent_id',$agentinfo->id)->get();
        return view('agent.index',compact('properties','agentinfo'));
    }

    // Register
    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:11',
            'address' => 'required|string|max:255',
            'sex' => 'required|string|in:male,female',
            'birthdate' => 'required|date',
        ]);

        $birthdate = date('Y-m-d', strtotime($request->birthdate));

        $user = new user();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $agent = new Agent();
        $agent->user_id = $user->id;
        $agent->name = $request->name;
        $agent->phone_number = $request->phone_number;
        $agent->address = $request->address;
        $agent->sex = $request->sex;
        $agent->birthdate = $birthdate; 
        $agent->save();
        auth()->login($user);

        return redirect()->route('login.loginpage')->with('successregister', true);
    }

}
