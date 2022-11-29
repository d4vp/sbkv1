<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function detalles()
    { 
        return view ('principal');
    }

    public function cuentadetalles()
    { 
        return view ('cuenta');
    }


    public function loginadmin()
    { 
        return view ('auth.login2');
    }

    public function soon()
    { 
        return view ('soonaction');
    }
}

