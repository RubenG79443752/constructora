@extends('layouts.app')

@section('template_title')
    Personal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo personal') }}
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

										<th>Doc Identidad</th>
										<th>Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Fecha Nacimiento</th>
										<th>Sexo</th>
                                        <th>Domicilio</th>
										<th>Pais de nacionalidad</th>
										<th>Cargo</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $personal->doc_identidad }}</td>
											<td>{{ $personal->nombre }}</td>
											<td>{{ $personal->primer_apellido }}</td>
											<td>{{ $personal->segundo_apellido }}</td>
											<td>{{ $personal->fecha_nacimiento }}</td>
                                            <td>{{ $personal->sexo }}</td>
                                            <td>{{ $personal->domicilio }}</td>
											<td>{{ $personal->pai->pais }}</td>
											<td>{{ $personal->cargo->cargo }}</td>
                                            <td>{{ $personal->estado }}</td>

                                            <td align="right">
                                                <form action="{{ route('personals.destroy',$personal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" title="Editar datos" href="{{ route('personals.edit',$personal->id) }}"><i class="bi bi-eraser-fill"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar datos de personal"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personals->links() !!}
            </div>
        </div>
    </div>
@endsection
