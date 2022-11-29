<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller {
    
    public function create() {
        
        return view('auth.register');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'apellido' => 'required',
            'N_identificacion' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'celular' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name','apellido','N_identificacion','email','date','celular','username', 'password']));

        auth()->login($user);
        return redirect()->to('/');
    }


    public function edit(User $user) {
        return view('productos.prueba');

    }




}


