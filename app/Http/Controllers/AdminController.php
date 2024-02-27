<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:255',
            'sex' => 'required|string|in:male,female',
            'birthdate' => 'required|date',

        ]);
    
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    
        $userId = $user->user_id;
    
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->user_id = $userId;
        $admin->phone_number = $request->phone;
        $admin->address = $request->address;
        $admin->sex = $request->sex;
        $admin->birthdate = $request->birthdate; 
        $admin->save();

        // 'admin_id',
        // 'user_id',
        // 'name',
        // 'phone_number',
        // 'address',
        // 'sex',
        // 'birthdate',
        // 'created_at',
        // 'updated_at',
    
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
