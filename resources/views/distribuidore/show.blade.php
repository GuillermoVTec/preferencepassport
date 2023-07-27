@extends('layouts.app')

@section('template_title')
    {{ $distribuidore->name ?? 'Show Distribuidore' }}

@endsection

@section('content')

    <section >

        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="col-xl">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ID: {{ $distribuidore->matriculaid }}</h5>


                                               <div class="float-left">
                            <a class="btn btn-primary" href="{{ route('distribuidores.index') }}"> Regresar</a>
                        
                        </div>
                    </div><hr>
                        

                        </div>
                        
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Distribuidore</span>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                             <div class="mb-3 col-md-2">
                            <label  class="form-label">Razonsocial:</label>
                            <p><b>{{ $distribuidore->razonsocial }}</b></p>
                         </div>
                                                <div class="mb-3 col-md-2">
                            <label  class="form-label">Representantelegal:</label>
                            <p><b>{{ $distribuidore->representantelegal }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">RFC:</label>
                            <p><b> {{ $distribuidore->rfc }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Direccion::</label>
                            <p><b>  {{ $distribuidore->direccion }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Ciudad:</label>
                            <p><b>{{ $distribuidore->ciudad }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Pais:</label>
                            <p><b>{{ $distribuidore->pais }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Codigo postal:</label>
                            <p><b> {{ $distribuidore->cp }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Correo:</label>
                            <p><b>{{ $distribuidore->correo }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono:</label>
                            <p><b>{{ $distribuidore->telefono }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Date:</label>
                            <p><b>{{ $distribuidore->date }}</b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Matriculaid:</label>
                            <p><b>{{ $distribuidore->matriculaid }}</b></p>
                         </div>

                 




                    </div>
                </div>
            </div>
             </div>
              </div>
               </div>
       
    </section>
@endsection
