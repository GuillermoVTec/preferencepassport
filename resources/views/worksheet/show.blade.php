@extends('layouts.app')

@section('template_title')
    {{ $worksheet->name ?? 'Show Worksheet' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Worksheet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('worksheet.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            {{ $worksheet->calificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Booking:</strong>
                            {{ $worksheet->booking }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupaciont:</strong>
                            {{ $worksheet->ocupaciont }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrec:</strong>
                            {{ $worksheet->nombrec }}
                        </div>
                        <div class="form-group">
                            <strong>Edadc:</strong>
                            {{ $worksheet->edadc }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupácionc:</strong>
                            {{ $worksheet->ocupácionc }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivilc:</strong>
                            {{ $worksheet->estadocivilc }}
                        </div>
                        <div class="form-group">
                            <strong>Ingresos:</strong>
                            {{ $worksheet->ingresos }}
                        </div>
                        <div class="form-group">
                            <strong>Tarjetas:</strong>
                            {{ $worksheet->tarjetas }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $worksheet->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $worksheet->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            {{ $worksheet->plataforma }}
                        </div>
                        <div class="form-group">
                            <strong>Localizador:</strong>
                            {{ $worksheet->localizador }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $worksheet->moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Leads Id:</strong>
                            {{ $worksheet->leads_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
