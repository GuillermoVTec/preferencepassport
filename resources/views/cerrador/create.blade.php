@extends('layouts.app')

@section('template_title')
    Create Cerrador
@endsection

@section('content')
    <section >
        <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Agregar cerrador</h4>
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <form method="POST" action="{{ route('cerradors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cerrador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
