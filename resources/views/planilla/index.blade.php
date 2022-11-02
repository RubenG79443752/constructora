@extends('layouts.app')

@section('template_title')
    Planillas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Planillas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('planillas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear registro a planilla') }}
                                </a>
                                <a href="{{ url('menu_sueldos') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-house-fill"></i> {{ __('Menu de opciones') }}
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

                                        <th>Empleado</th>
										<th>Mes</th>
										<th>Anio</th>
										<th>Horas Pagadas</th>
										<th>Dias Pagados</th>
										<th>Haber Basico</th>
										<th>Bono Antiguedad</th>
										<th>Trabajo Extra</th>
										<th>Total Ganado</th>
										<th>Afps</th>
										<th>Rc Iva</th>
										<th>Otros Descuentos</th>
										<th>Total Descuentos</th>
										<th>Liquido Pagable</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planillas as $planilla)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $planilla->personal->nombre.' '.$planilla->personal->primer_apellido.' '.$planilla->personal->segundo_apellido }}</td>
											<td>{{ $planilla->mes }}</td>
											<td>{{ $planilla->anio }}</td>
											<td>{{ $planilla->horas_pagadas }}</td>
											<td>{{ $planilla->dias_pagados }}</td>
											<td>{{ $planilla->haber_basico }}</td>
											<td>{{ $planilla->bono_antiguedad }}</td>
											<td>{{ $planilla->trabajo_extra_nocturno }}</td>
											<td>{{ $planilla->total_ganado }}</td>
											<td>{{ $planilla->afps }}</td>
											<td>{{ $planilla->rc_iva }}</td>
											<td>{{ $planilla->otros_descuentos }}</td>
											<td>{{ $planilla->total_descuentos }}</td>
											<td>{{ $planilla->liquido_pagable }}</td>
											<td>{{ $planilla->estado }}</td>

                                            <td>
                                                <form action="{{ route('planillas.destroy',$planilla->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning" href="{{ route('planillas.edit',$planilla->id) }}" title="Actualizar registro"><i class="bi bi-pen-fill"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar registro"><i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $planillas->links() !!}
            </div>
        </div>
    </div>
@endsection
