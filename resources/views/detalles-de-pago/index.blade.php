@extends('layouts.app')

@section('template_title')
    Detalles De Pago
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles De Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('createddp') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Costo Total</th>
										<th>Pakeo Agente</th>
										<th>Activacion</th>
										<th>Reporte Fee</th>
										<th>Pago Inicial</th>
										<th>Pendiente De Pago</th>
										<th>Fecha Limite</th>
										<th>Fecha De Pago</th>
										<th>Cantidad</th>
										<th>Concepto</th>
										<th>Status De Pago</th>
										<th>Pago Asignado</th>
										<th>Num Aprovacion</th>
										<th>Nota</th>
										<th>Comprovante</th>
										<th>Forma De Pago</th>
										<th>Worksheet Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesDePagos as $detallesDePago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesDePago->costo_total }}</td>
											<td>{{ $detallesDePago->pakeo_agente }}</td>
											<td>{{ $detallesDePago->activacion }}</td>
											<td>{{ $detallesDePago->reporte_fee }}</td>
											<td>{{ $detallesDePago->pago_inicial }}</td>
											<td>{{ $detallesDePago->pendiente_de_pago }}</td>
											<td>{{ $detallesDePago->fecha_limite }}</td>
											<td>{{ $detallesDePago->fecha_de_pago }}</td>
											<td>{{ $detallesDePago->cantidad }}</td>
											<td>{{ $detallesDePago->concepto }}</td>
											<td>{{ $detallesDePago->status_de_pago }}</td>
											<td>{{ $detallesDePago->pago_asignado }}</td>
											<td>{{ $detallesDePago->num_aprovacion }}</td>
											<td>{{ $detallesDePago->nota }}</td>
											<td>{{ $detallesDePago->comprovante }}</td>
											<td>{{ $detallesDePago->forma_de_pago }}</td>
											<td>{{ $detallesDePago->worksheet_id }}</td>

                                            <td>
                                                
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('detallesDePago/{id}',$detallesDePago->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                 
                                                    
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detallesDePagos->links() !!}
            </div>
        </div>
    </div>
@endsection
