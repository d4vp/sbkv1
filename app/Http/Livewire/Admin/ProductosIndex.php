<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Producto;

class ProductosIndex extends Component
{
    public function render()
    { 

        $producto=Producto::where('user_id', auth()->user()->id);
        
        return view ('livewire.admin.productos-index', compact('productos'));
    } 
    
}
