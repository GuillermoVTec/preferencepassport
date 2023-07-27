@extends('layouts.app')

@section('template_title')
  
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Editar Distribuidor</h4>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('distribuidores.index') }}">Regresar</a></small></h5>
                        <span class="card-title">Update Distribuidore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('distribuidores.update', $distribuidore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('distribuidore.form')
                                <div class="fw-bold py-3 mb-4">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a type="reset" href="{{ route('distribuidores.index') }}" class="btn btn-outline-secondary">Cancelar </a>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
