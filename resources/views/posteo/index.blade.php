
@extends('layouts.productos')

@section('template_title')
    Posteo
@endsection

@section('content')
<br>
<div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">CREAR POSTS</h1>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Posteo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('posteos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo post') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr style="background-color: #136f83; color:white">
                                        <th style="text-align:center;">No</th>
										<th style="text-align:center;">Descripcion</th>
										<th style="text-align:center;">Categoria Id</th>
                                        <th style="text-align:center;">Imagen</th>
                                        <th style="text-align:center;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($posteos as $posteo)
                                        <tr style="text-align:center;" >
                                            <td style="padding: 45px; padding-right:15px; padding-left:15px; background-color:rgb(121, 116, 116); color:white">{{ ++$i }}</td>
											<td>{!! Str::limit($posteo->descripcion, 30, ' ...') !!}</td>
											<td>{{ $posteo->categoria->name }}</td>
                                            <td><center><img src="{{asset($posteo->imagen)}}" alt="" height="100px"></center></td>
                                            <td>
                                                <form action="{{ route('posteos.destroy',$posteo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posteos.show',$posteo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posteos.edit',$posteo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posteos->links() !!}
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#descripcion' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


<div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">Mira todos los posts de los usuarios</h1>
    
</div>
<center><a class="btn btn-dark"style="color:white; text-decoration: none;" href="http://localhost/sofonbike/public/publicaciones">Ver posts</a></center>
<br><br>

@endsection

