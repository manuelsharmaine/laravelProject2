<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index() {

        $users = User::with('posts')->get();

        return $users;
    }

    public function store(Request $request) {

        $user = new User;
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = bcrypt('password');
        $user->save();

        return $user;
    }

    public function show($id) {
        $user = User::with('posts.category')->where('id', $id)->first();

        return $user;
    }
}
