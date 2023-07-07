@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nota.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $nota->nota }}
                        </div>
                        <div class="form-group">
                            <strong>Leads Id:</strong>
                            {{ $nota->leads_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
