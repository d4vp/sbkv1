<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetallesproductoController;
use App\Http\Controllers\BicicletaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PosteoController;
use App\Http\Controllers\ImagenController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;


/* Route::get('/', function () {
    return view('welcome');
}); */
 
/* Route::get('/', function () {
    return view('home');
})->middleware('auth'); */

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login2.destroy');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('home/',[PrincipalController::class,'detalles'])->name('principal')/* ->middleware('auth') */;
Route::get('cuenta/',[PrincipalController::class,'cuentadetalles'])->name('cuenta');

Route::get('soon',[PrincipalController::class,'soon'])->name('soonaction');

/* Route::get('loginadmin/',[PrincipalController::class,'loginadmin'])->name('logina'); */
/* Route::get('loginadmin/',[PrincipalController::class,'create2'])->name('logina'); */

Route::get('/loginadmin', [SessionsController::class, 'create2'])
   /*  ->middleware('guest') */
    ->name('login2.index');

Route::post('/loginadmin', [SessionsController::class, 'store2'])
    ->name('login2.store2');

/*  Route::post('/logoutadmin', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login2.destroy');  */

/* Route::get('p',[RegisterController::class, 'edit'])
    ->name('productos.edit'); */

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

 Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('productos',[ProductoController::class,'index'])->name('productos.index')->middleware('auth');
Route::post('productos', [ProductoController::class,'store'])->name('productos.store')->middleware('auth');
Route::get('productos/create',[ProductoController::class,'create'])->name('productos.create')->middleware('auth');
Route::delete('productos/{producto}',[ProductoController::class,'destroy'])->name('productos.destroy')->middleware('auth');
Route::get('productos/{producto}',[ProductoController::class,'show'])->name('productos.show')->middleware('auth');
Route::get('productos/{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit')->middleware('auth');
Route::put('productos/{producto}',[ProductoController::class,'update'])->name('productos.update')->middleware('auth');
Route::get('productos/{producto}/detalles/',[ProductoController::class,'detalles'])->name('productos.detalles')->middleware('auth');
Route::get('productos/{producto}/detallescompra/',[ProductoController::class,'detallescompra'])->name('productos.detallescompra')->middleware('auth');

Route::resource('profiles', \App\Http\Controllers\ProfileController::class)->middleware('auth');

/* Route::resource('profiles', \App\Http\Controllers\ProfileController::class);
 */
Route::get('prod',[ProductoController::class,'in'])->name('livewire.admin.productos-index');

Route::get('productoss',[DetallesproductoController::class,'index'])->name('detallesproductos.index')->middleware('auth');
Route::post('productoss', [DetallesproductoController::class,'store'])->name('detallesproductos.store')->middleware('auth');
Route::get('productoss/create',[DetallesproductoController::class,'create'])->name('detallesproductos.create')->middleware('auth');
Route::delete('productoss/{detallesproducto}',[DetallesproductoController::class,'destroy'])->name('detallesproductos.destroy')->middleware('auth');
Route::get('productoss/{detallesproducto}',[DetallesproductoController::class,'show'])->name('detallesproductos.show')->middleware('auth');
Route::get('productoss/{detallesproducto}/edit',[DetallesproductoController::class,'edit'])->name('detallesproductos.edit')->middleware('auth');
Route::put('productoss/{detallesproducto}',[DetallesproductoController::class,'update'])->name('detallesproductos.update')->middleware('auth');
Route::get('productoss/{detallesproducto}/detalles',[DetallesproductoController::class,'detalles'])->name('detallesproductos.detalles')->middleware('auth');

Route::resource('bicicletas', \App\Http\Controllers\BicicletaController::class)->middleware('auth');

Route::resource('posts', \App\Http\Controllers\PostController::class)->middleware('auth');

Route::resource('categorias', \App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::resource('posteos', \App\Http\Controllers\PosteoController::class)->middleware('auth');
/* Route::get('posteos/{posteo}/d/',[PosteoController::class,'publicados'])->name('posteos.publicados');
 */Route::get('publicaciones',[PosteoController::class,'publicados'])->name('posteos.publicados')->middleware('auth');


Route::resource('imagenes', \App\Http\Controllers\ImagenController::class)->middleware('auth'); 
Route::get('imagenes',[ImagenController::class,'index'])->name('imagens.index')->middleware('auth');
Route::get('imagenes/create',[ImagenController::class,'create'])->name('imagens.create')->middleware('auth');
Route::post('imagenes', [ImagenController::class,'store'])->name('imagens.store')->middleware('auth');
Route::post('imagenes/{imagen}', [ImagenController::class,'show'])->name('imagens.show')->middleware('auth');
Route::delete('imagenes/{imagen}', [ImagenController::class,'destroy'])->name('imagens.destroy')->middleware('auth');
Route::get('imagenes/{imagen}/edit', [ImagenController::class,'edit'])->name('imagens.edit')->middleware('auth');
Route::put('imagenes/{imagen}', [ImagenController::class,'update'])->name('imagens.update')->middleware('auth');

Route::get('listaproductos',[ProductoController::class,'indexlista'])->name('productos.listaproducto')->middleware('auth');

Route::get('reportes',[BicicletaController::class,'reporte'])->name('bicicleta.reporte')->middleware('auth');

Route::get('reportes/{bicicleta}', [BicicletaController::class,'reportedetalles'])->name('bicicleta.reportedetalle')->middleware('auth');

/* Route::resource( 'cart',\App\Http\Controllers\CartController::class);
 */

/*  Route::get('/', (function(){
    return view('form');
}));


 */

/* Route::get('/', 'FrontController@index' ); */
Route::get('/', [FrontController::class,'index']);


Route::post('/cart-add', [CartController::class,'add'])->name('cart.add');

Route::get('/cart-checkout',[CartController::class,'cart'])->name('cart.checkout');

Route::post('/cart-clear',  [CartController::class,'clear'])->name('cart.clear');

Route::post('/cart-removeitem',  [CartController::class,'removeitem'])->name('cart.removeitem');



Route::get('/home', [HomeController::class,'index'])->name('home');
