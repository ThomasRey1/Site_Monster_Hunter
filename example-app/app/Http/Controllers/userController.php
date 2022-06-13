<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('inscription');
    }

    public function store(Request $request)
    {
        User::create([
            'nickname' => $request->nickname,
            'password' => $request->password
        ]);
        return view('home');
    }
}
