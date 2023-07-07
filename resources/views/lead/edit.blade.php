@extends('layouts.app')

@section('template_title')
    
@endsection

@section('content')
   
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                         @role('Distribuidor')
                             <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('indexDist') }}">Regresar</a></small></h5>
                            @else('Administrador')
                            
                            <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('indexAdmin') }}">Regresar</a></small></h5>
                            @endrole
                        <span class="card-title">Update Lead</span>
                        
                    </div>
                    
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('lead.update', $lead->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('lead.form')
                            <div class="fw-bold py-3 mb-4">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a type="reset" href="{{ route('home') }}" class="btn btn-outline-secondary">Cancelar </a>
                             </div>
                        </form>
                  </div>
     
                    </div>
                </div>
               
            </div>
        </div>
@endsection
