@extends('layouts.app')

@section('template_title')
   
@endsection

@section('content')
    <section >
       
            <div class="col-md-12">                        
                                
                                 <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Registrar Tarjeta</h4>
                @includeif('partials.errors')

                <div class="card card-default">
                
                    <div class="card-header">
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-info"  href="{{ route('home') }}">Regresar</a></small></h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('leads.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lead.form')
                            <div class="fw-bold py-3 mb-4">
                                <button type="submit" class="btn btn-info">Guardar</button>
                                <a type="reset" href="{{ route('home') }}" class="btn btn-outline-secondary">Cancelar </a>
                             </div>
                        </form>
                     </div>
               </div>
            </div>
       </div>
    </section>
@endsection
