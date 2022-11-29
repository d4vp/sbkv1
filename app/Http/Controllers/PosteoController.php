<?php

namespace App\Http\Controllers;

use App\Posteo;
use App\Categoria;
use App\Models\Imagen;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;


use Illuminate\Support\Facades\Storage;

/**
 * Class PosteoController
 * @package App\Http\Controllers
 */
class PosteoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      
        $posteo=Posteo::where('user_id', auth()->user()->id);
        $posteos = Posteo::paginate(3);
       

        return view('posteo.index', compact('posteos'))
            ->with('i', (request()->input('page', 1) - 1) * $posteos->perPage(3));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posteo = new Posteo();
        $categorias=Categoria::pluck('name','id');
        return view('posteo.create', compact('posteo','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Posteo::$rules);

        $categoria= new  Categoria();
    
        $posteo= new  Posteo();
        $posteo->descripcion=$request->descripcion;
        if($request->hasfile("imagen")){
            $file=$request->file("imagen");
           $destinationPath= 'img/Multimedia/';
           $filename=time().'-'.$file->getClientOriginalName();
           $uploadSuccess=$request->file('imagen')->move($destinationPath, $filename);
           $posteo->imagen = $destinationPath . $filename;
        }  
        $posteo->categoria_id=$request->categoria_id;
        $posteo->user_id = auth()->user()->id;
        $posteo->save();

        return redirect()->route('posteos.index')->with('success', 'Posteo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posteo = Posteo::find($id);

        return view('posteo.show', compact('posteo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request, Imagen $imagen, Categoria $categoria)
    {
        $posteo = Posteo::find($id);
        $categorias=Categoria::pluck('name','id');
        $posteo->imagen=$request->imagen;
      

        return view('posteo.edit', compact('posteo', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Posteo $posteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posteo $posteo)
    {
        $posteo=Posteo::find($posteo->id);
        $posteo->descripcion=$request->descripcion;
        if($request->hasfile("imagen")){
            $file=$request->file("imagen");
            $destinationPath= 'img/Multimedia/';
            $filename=time().'-'.$file->getClientOriginalName();
            $uploadSuccess=$request->file('imagen')->move($destinationPath, $filename);
            $posteo->imagen = $destinationPath . $filename;
            $posteo->categoria_id=$request->categoria_id;
        }  
        $posteo->save();

        return redirect()->route('posteos.index')->with('success', 'Posteo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $posteo = Posteo::find($id)->delete();

        return redirect()->route('posteos.index')->with('success', 'Posteo deleted successfully');
    }

    public function publicados(Request $request)


    { 
        $posteos=Posteo::all();
       /*  $posteo = Posteo::find($id); */
        return view('posteo.publicados', compact('posteos'));
    }

}
