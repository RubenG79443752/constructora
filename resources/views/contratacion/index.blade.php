@extends('layouts.app')

@section('template_title')
    Contratacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contratacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contratacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo contrato') }}
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

                                        <th>Personal</th>
										<th>Contrato</th>
                                        <th>Ref. de contrato</th>
										<th>Fecha Ingreso</th>
										<th>Sueldo Inicial (Bs.)</th>
										<th>Garantia</th>
										<th>Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contratacions as $contratacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $contratacion->personal->nombre.' '.$contratacion->personal->primer_apellido.' '.$contratacion->personal->segundo_apellido }}</td>
											<td><a href="{{ asset('storage/'.$contratacion->contrato) }}" class="text-decoration-none" target="_blank"><img src="{{ asset('storage/'.$contratacion->contrato) }}" alt="" width="90"></a></td>
											<td>{{ $contratacion->referencia_contrato }}</td>
                                            <td>{{ $contratacion->fecha_ingreso }}</td>
											<td>{{ $contratacion->sueldo_inicial }}</td>
											<td>{{ $contratacion->garantia }}</td>
											<td>{{ $contratacion->empresa->razon_social }}</td>

                                            <td align="right">
                                                <form action="{{ route('contratacions.destroy',$contratacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contratacions.show',$contratacion->id) }}"><i class="fa fa-fw fa-eye"></i> Detalle</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contratacions.edit',$contratacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contratacions->links() !!}
            </div>
        </div>
    </div>
@endsection
