@extends('layouts.app')

@section('template_title')
    {{ $cerrador->name ?? 'Show Cerrador' }}
@endsection

@section('content')
    <section >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cerrador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cerradors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
