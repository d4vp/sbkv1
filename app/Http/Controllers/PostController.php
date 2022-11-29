<?php

namespace App\Http\Controllers;

use App\Post;
use App\Categoria;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*  $posts = Post::paginate(); */
       
        $posts=Post::where('user_id', auth()->user()->id);
        return view('post.index', compact('posts'))
       /*  ->with('i', (request()->input('page', 1) - 1) * $posts->perPage()) */ ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $categorias=Categoria::pluck('name','id');
        return view('post.create', compact('post', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
     request()->validate(Post::$rules); 

      /*   $post = Post::create($request->all()); */

     /*  $author = Author::create(['Terry Goodkind']); */


/*    $categoria= Categoria::find($id); */
     $categoria= new  Categoria();
    
        $post= new  Post();
        $post->descripcion=$request->descripcion;
        /*  $post->categoria_id=$request->categoria_id;   */
        /*  */

        /* $post->categoria_id=$categoria->id; */
       /*  $post->categoria_id = $categoria->id; */
        $post->categoria_id=$request->categoria_id;
       /*  $post->categoria_id = 2; */

       /*  $book->author_id = $author->id; */

        $post->user_id = auth()->user()->id;
        $post->save();


        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categorias=Categoria::pluck('id');
        return view('post.edit', compact('post','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate(Post::$rules);

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
