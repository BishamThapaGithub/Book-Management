<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function newFun(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required|string|min:8',
            'email' => 'required|unique:users'
        ]);

        User::create($validate);


        return redirect(route('login'));
    }

}
