<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Producto;
class FrontController extends Controller
{

    public function index(){

        $productos    =   Producto::all();
        return view('carrito.welcome',compact('productos'));

    }
}
