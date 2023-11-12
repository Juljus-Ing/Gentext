<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use Illuminate\Support\Facades\DB;//Se agregan los métodos para usar tablas
use Illuminate\Support\Arr;

class Sesiones extends Controller
{
    public function loggear() {
        return view('auth.login');
    }

    public function inicio() {
        $textos = DB::table('textos')->where('usuario', auth()->user()->id)->get();  
        return view("inicio", compact('textos'));
    }

    public function logg(){
        if(Auth()->attempt(request(['email','password']))==false) {
            return back()->withErrors(['message' => 'El correo o contraseña son incorrectos, intente de nuevo.']);
        }              
        return redirect()->to('/');        
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }

}
