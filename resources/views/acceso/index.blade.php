@extends('layouts.app')

@section('template_title')
    Permisos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="text-danger">Usuario: {{ $accesos[0]->user->name }}</h3>

                            </span>
                            <div class="float-right">
                                <a href="{{ route('users.index') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-arrow-return-left"></i> {{ __('Retornar') }}
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
										<th>Opcion</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accesos as $acceso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $acceso->opcion }}</td>
                                            <td>{!! ($acceso->estado == "Habilitado")? '<span class="badge bg-primary">Habilitado</span>':'<span class="badge bg-danger">Deshabilitado</span>' !!}</td>
                                            <td>
<<<<<<< HEAD
                                                <a class="btn btn-sm btn-success" href="{{ route('accesos.edit',$acceso->id) }}"><i class="bi bi-pencil-square"></i> Editar permiso</a>
                                            </td>
=======
<<<<<<< HEAD
                                            <form action="{{ route('accesos.destroy',$acceso->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-star-half"></i> Estado</button>
                                            </form>
=======
                                                <a class="btn btn-sm btn-success" href="{{ route('accesos.edit',$acceso->id) }}"><i class="bi bi-pencil-square"></i> Editar permiso</a>
<<<<<<< HEAD
                                                <form action="{{ route('accesos.destroy',$acceso->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-star-half"></i> Estado</button>
{{ Form::hidden('id', $acceso->user_id, ['class' => 'form-control']) }}
</form>
=======
>>>>>>> d030ea51c7a277a91de4a10625f09008a194c681
                                            </td>
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
>>>>>>> 06922fc0224a1f4dd5fb1d040b387825a943b30e
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $accesos->links() !!}
            </div>
        </div>
    </div>
@endsection
