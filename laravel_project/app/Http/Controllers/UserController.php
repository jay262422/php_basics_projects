<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Show the Add User form
    public function showAddUserForm() {
        return view('add_user');
    }

    // Store a new user in the database
    public function storeUser(Request $request) {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
        ]);

        return redirect('/view-users');
    }

    // View all users
    public function viewUsers() {
        $users = DB::table('users')->get();
        return view('view_users', ['users' => $users]);
    }
}
