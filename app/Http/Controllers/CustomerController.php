<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $customerinfo = Customer::where('user_id', $user->id)->first();
        $properties = Property::All();
        //dd($customerinfo);

        return view('customer.index', compact('properties','customerinfo'));
    }

    // SIGNUP
    public function register(Request $request)
    {
        //dd($request->all());
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

        // Create a new user record
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->Name = $request->name;
        $customer->Phone_number = $request->phone_number;
        $customer->Address = $request->address;
        $customer->Sex = $request->sex;
        $customer->Birthdate = $birthdate; 
        $customer->save();
        auth()->login($user);

        return redirect()->route('login.loginpage')->with('successregister', true);
    }

    public function customerprofile(){
        $user = auth()->user();
        $customerinfo = Customer::where('user_id', $user->id)->first();
        $userinfo = User::where('id', $customerinfo->user_id)->first();

        return view('customer.customerprofile', compact('customerinfo','userinfo'));
    }

    public function update(Request $request){
        $user = Auth::user();
        $customerinfo = Customer::where('user_id', $user->id)->first();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $customerinfo->name = $validatedData['name'];
        $customerinfo->address = $validatedData['address'];

        $customerinfo->save();

        $user->email = $validatedData['email'];

        if(isset($request->new_password) && $request->new_password != NULL){
            $this->validate($request, [
                'new_password' => 'required|string|min:8',
            ]);
    
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('customer.dashboard');
    }
    
}
