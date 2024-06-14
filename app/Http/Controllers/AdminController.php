<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function admin()
    {
        $totalusers = User::count();
        $administrators = User::where('role', 1)->count(); // Retrieve administrators
        $users = User::where('role', 0)->count(); // Retrieve regular users
        return view('admin.dashboard', compact('totalusers', 'administrators', 'users'))->with('success', 'Admin Logged In Successfully!');
    }

    public function manageUsers()
    {
        $administrators = User::where('role', 1)->get();
        $users = User::where('role', 0)->get();

        return view('admin.users', compact('administrators', 'users'));
    }

    public function create()
    {   
        return view('admin.create');
    }

    public function createUserView()
    {
        return view('admin.createuser'); 
    }

    public function createUser(Request $request)
    {



    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
        'role' => 'required|numeric|in:0,1',
    ], [
        'password.confirmed' => 'The passwords do not match.',
    ]);

    $role = $validatedData['role'];

    if ($role == 0) {
        $roleLabel = 'User';
    } elseif ($role == 1) {
        $roleLabel = 'Admin';
    } else {
        return redirect()->back()->withInput()->withErrors(['role' => 'Invalid role value.']);
    }

   

    // Create user
    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->role = $role;
    $user->save();

    return redirect()->route('admin.users', compact('user'))->with('success', "$roleLabel added successfully");
    }

   


  

    
}
