@extends('layouts.app')

@section('template_title')
    {{ $detallesDePago->name ?? 'Show Detalles De Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalles De Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-de-pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Costo Total:</strong>
                            {{ $detallesDePago->costo_total }}
                        </div>
                        <div class="form-group">
                            <strong>Pakeo Agente:</strong>
                            {{ $detallesDePago->pakeo_agente }}
                        </div>
                        <div class="form-group">
                            <strong>Activacion:</strong>
                            {{ $detallesDePago->activacion }}
                        </div>
                        <div class="form-group">
                            <strong>Reporte Fee:</strong>
                            {{ $detallesDePago->reporte_fee }}
                        </div>
                        <div class="form-group">
                            <strong>Pago Inicial:</strong>
                            {{ $detallesDePago->pago_inicial }}
                        </div>
                        <div class="form-group">
                            <strong>Pendiente De Pago:</strong>
                            {{ $detallesDePago->pendiente_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Limite:</strong>
                            {{ $detallesDePago->fecha_limite }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Pago:</strong>
                            {{ $detallesDePago->fecha_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detallesDePago->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $detallesDePago->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Status De Pago:</strong>
                            {{ $detallesDePago->status_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Pago Asignado:</strong>
                            {{ $detallesDePago->pago_asignado }}
                        </div>
                        <div class="form-group">
                            <strong>Num Aprovacion:</strong>
                            {{ $detallesDePago->num_aprovacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $detallesDePago->nota }}
                        </div>
                        <div class="form-group">
                            <strong>Comprovante:</strong>
                            {{ $detallesDePago->comprovante }}
                        </div>
                        <div class="form-group">
                            <strong>Forma De Pago:</strong>
                            {{ $detallesDePago->forma_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Worksheet Id:</strong>
                            {{ $detallesDePago->worksheet_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
