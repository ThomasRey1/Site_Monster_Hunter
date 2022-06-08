<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\user;

class userController extends Controller
{
    public function addUser(){
        request()->validate(
            [
                'name' => ['required'],
                'password' => ['required', 'confirmed', 'min:8'],
                'password_confirmed' => ['required']
            ],
            [
                'password.confirmed' => 'Mot de passe non correcte.'
            ]
        );

        $newUser = new user;
        $newUser->useNickname = request('name');
        $newUser->usePasswordHash = bcrypt(request('password'));
        $newUser->save();
        return redirect('/home');
    }

    public function connectUser(){
        
    }
}
