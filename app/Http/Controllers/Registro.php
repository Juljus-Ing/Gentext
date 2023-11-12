<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class Registro extends Controller
{
    public function registro() {
        return view('auth.registro');
    }

    public function registrar(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = user::create(request(['name','email','password']));
        auth()->login($user);
        return redirect()->to('/');

    }
}
