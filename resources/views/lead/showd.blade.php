

@extends('layouts.app')

@section('template_title')
    
@endsection

@section('content')

            <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-bx bx-detail me-1"></i> Informacion lead</h4>
            
              <!-- Basic Layout -->
              <div class="row">

                <div class="col-xl">

                  <div class="card mb-4">
                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ID: {{ $lead->id_lead }}</h5>
                      @if(isset($user->distribuidore->matriculaid))
                      <small class="text-muted float-end">Matricula Dist.<h6 class="mb-0">{{ $user->distribuidore->matriculaid }}</h6></small>
                      
                      @endif
                      
                       <small class="text-muted float-end"> 
                       <div class="float-right">
                           
                            @role('Distribuidor')
                            <a class="btn btn-primary" href="{{ route('indexDist') }}"> Regresar</a>
                            @endrole

 
                        </div>
                        </small>
                    </div><hr>
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">           
                      </form>
                    </div>



                    <div class="card-body">
                        <div class="row">

                        <div class="mb-3 col-md-3">
                            <label class="form-label">Nombre Completo:</label>
                            <p><b>{{ $lead->nombre }}</b></p>
                          </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Edad:</label>
                            <p><b>{{ $lead->edad }}</b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Estado Civil:</label>
                            <p><b>{{ $lead->estadocivil }}</b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono 1:</label>
                            <p><b>{{ $lead->telefono1 }}</b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono 2:</label>
                            <p><b>{{ $lead->telefono2 }}</b></p>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label class="form-label">Correo Electronico:</label>
                            <p><b>{{ $lead->correo }}</b></p>
                             </div>
                           <div class="mb-3 col-md-2">
                            <label class="form-label">País:</label>
                            <p><b>{{ $lead->pais }}</b></p>
                          </div>
                                                        <div class="mb-3 col-md-2">
                            <label class="form-label">Nota De Distribudor:</label>
                            <p><b>{{ $lead->notal }}</b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label class="form-label">Fecha de Registro:</label>
                            <p><b>{{ date('d-m-Y h:i:s', strtotime($lead->created_at)) }}</b></p>
                          </div>
              </div>
            
            
     </div>
 </div>
  </div>
   </div>
    </div>
     </div>
  
    </section>
    
@endsection