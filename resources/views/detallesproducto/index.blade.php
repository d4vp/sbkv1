@extends('layouts.app')

@section('template_title')
    Detallesproducto
@endsection

@section('content')
    <div class="container-fluid" style="padding-top:90px">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detallesproducto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detallesproductos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Color</th>
										<th>Material</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Imageable Id</th>
										<th>Imageable Type</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesproductos as $detallesproducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesproducto->name }}</td>
											<td>{{ $detallesproducto->descripcion }}</td>
											<td>{{ $detallesproducto->color }}</td>
											<td>{{ $detallesproducto->material }}</td>
											<td>{{ $detallesproducto->marca }}</td>
											<td>{{ $detallesproducto->modelo }}</td>
											<td>{{ $detallesproducto->imageable_id }}</td>
										<td>{{ $detallesproducto->imageable_type }}</td> 

                                            <td>
                                                <form action="{{ route('detallesproductos.destroy',$detallesproducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detallesproductos.show',$detallesproducto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                {{--     <a class="btn btn-sm btn-success" href="{{ route('detallesproductos.edit',$detallesproducto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
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
                {!! $detallesproductos->links() !!}
            </div>
        </div>
    </div>
@endsection
