<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function admin()
    {
        return view('layouts.admin');
    }

    public function manageUsers()
    {
        $administrators = User::where('role_as', 1)->get(); // Retrieve administrators
        $users = User::where('role_as', 0)->get(); // Retrieve regular users

        return view('admin.users', compact('administrators', 'users'));
    }

    public function addUser(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Change 'password' to the desired password
        $user->role_as = 0;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User added successfully.');
    }

    public function addAdministrator(Request $request)
    {
        // Create a new administrator user with role_as set to 1
        $administrator = new User();
        $administrator->name = $request->input('name');
        $administrator->email = $request->input('email');
        $administrator->password = bcrypt($request->input('password')); // Change 'password' to the desired password
        $administrator->role_as = 1;
        $administrator->save();

        return redirect()->route('admin.users')->with('success', 'Admin added successfully.'); // Redirect back to the manageUsers view
    }
}
