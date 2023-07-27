                                                                                                                                                                                                                                                                                   

@extends('layouts.app')

@section('template_title')
    {{ $lead->name ?? 'Ver Lead' }}
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
                      <h5 class="mb-0">ID: {{ $lead->id }}</h5>
                      @if(isset($user->distribuidore->matriculaid))
                      <small class="text-muted float-end">Matricula Dist.<h6 class="mb-0">{{ $user->distribuidore->matriculaid }}</h6></small>
                      
                      @endif
                      
                     
                      
                      
                      
                   
     
                    
                    @hasrole('Administrador|Gerente Ventas|Gerente')
                 <form  method="POST" action="{{ route('lead.showUpdate',$lead->id) }}" enctype="multipart/form-data">    
                           
                            @csrf
                      <small class="text-muted float-end">Estatus
                      <div class="input-group input-group-merge">
                      <select class="form-select form-select-sm" name="statuses_id" id="statuses_id">
                                <option value="{{$lead->statuses_id}}" > Seleccionar un estado</option> 
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                               
                    </select>

                         <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                       
                    <div data-i18n="Without menu"></div>
                    
                        </div>
                      </small>
                     </form>
                       @endhasrole
                @role('Ventas')
                 <form  method="POST" action="{{ route('lead.showUpdate',$lead->id) }}" enctype="multipart/form-data">    
                           
                            @csrf
                      <small class="text-muted float-end">Estatus
                      <div class="input-group input-group-merge">
                      <select class="form-select form-select-sm" name="statuses_id" id="statuses_id">
                                <option value="" > Seleccionar un estado</option> 
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                <option value="5">ACTIVADO</option>
                                <option value="6">DATOS INCORRECTOS</option>
                                <option value="7">PRE REGISTRO</option>
                               
                    </select>

                         <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                    <div data-i18n="Without menu"></div>
                    
                        </div>
                      </small>
                     </form>
                       @endrole
                     @hasrole('Administrador|Gerente Ventas|Gerente')
                    <form action="{{ route('lead.showUpdate',$lead->id) }}" method="POST" enctype="multipart/form-data">    
                           
                            @csrf
                      <small class="text-muted float-end">Cerrador
                      <div class="input-group input-group-merge">
                        <select id="cerrador_id" name="cerrador_id"  class="form-select form-select-sm">
                          <option value="" >Seleccionar un cerrador</option>
                          
                                @foreach ($cerradores as $cerrador)
                                          <option value="{{ $cerrador->id }}"> {{ $cerrador->name }} </option> 
                                @endforeach
                        </select>
                        
                        <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                        
                     </div>  
                     
                      </small>
                      
                     
                    <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control @error('statuses_id') is-invalid @enderror" name="statuses_id" value="{{$lead->statuses_id}}" hidden  autocomplete="statuses_id"  placeholder = 'statuses_id'>
                      </form>
                       @endhasrole
                    @role('Ventas')
                    <form action="{{ route('lead.showUpdate',$lead->id) }}" method="POST" enctype="multipart/form-data">    
                           
                            @csrf
                      <small class="text-muted float-end">Cerrador
                      <div class="input-group input-group-merge">
                        <select id="cerrador_id" name="cerrador_id"  class="form-select form-select-sm">
                          <option value="{{$lead->cerrador_id}}" >Seleccionar un cerrador</option>
                          
                                @foreach ($cerradores as $cerrador)
                                          <option value="{{ $cerrador->id }}"> {{ $cerrador->name }} </option> 
                                @endforeach
                        </select>
                        <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                        <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control @error('statuses_id') is-invalid @enderror" name="statuses_id" value="{{$lead->statuses_id}}" hidden  autocomplete="statuses_id"  placeholder = 'statuses_id'>
                     </div>  
                     
                      </small>
                      
                     
                    
                      </form>
                       @endrole
                       <small class="text-muted float-end"> 
                       <div class="float-right">
                           
                            @role('Distribuidor')
                            <a class="btn btn-primary" href="{{ route('indexDist') }}"> Regresar</a>
                            @endrole
                             @hasrole('Administrador|Gerente Ventas')
                            <a class="btn btn-primary" href="{{ route('indexAdmin') }}"> Regresar</a>
                            @endhasrole
                            @role('Ventas')
                          @if($lead->statuses_id == '1')
                           <a class="btn btn-primary" href="{{ route('nuevo') }}"> Regresar</a>
                          @elseif($lead->statuses_id == '2') 
                           <a class="btn btn-primary" href="{{ route('seguimiento') }}"> Regresar</a>
                          @elseif($lead->statuses_id == '3')
                           <a class="btn btn-primary" href="{{ route('nocontesto') }}"> Regresar</a>
                          @elseif($lead->statuses_id == '4')
                           <a class="btn btn-primary" href="{{ route('nointeresado') }}"> Regresar</a>
                          @elseif($lead->statuses_id == '5')
                           <a class="btn btn-primary" href="{{ route('activados') }}"> Regresar</a>
                          @elseif($lead->statuses_id == '6')
                           <a class="btn btn-primary" href="{{ route('datosincorrectos') }}"> Regresar</a>
                          @else($lead->statuses_id == '7')
                           <a class="btn btn-primary" href="{{ route('preregistro') }}"> Regresar</a>
                          @endif
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
                         @if(isset($cerradors))
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Nombre de cerrador:</label>
                                
                                          <p> <b>{{ $cerradors->name }}</b></p> 
                               
                          </div>
                         @endif 
                        @hasrole('Administrador|Gerente Ventas|Gerente')

                          
                        @can('ver nota')
                          <form action="{{ route('lead.showStore',$lead->id) }}" method="POST">
                              
                              @csrf
                        <div class="collapse" id="collapseExample">
                        <div class="d-grid d-sm-flex p-6 ">
                          <div class="input-group input-group-merge">
                                    {{ Form::textArea('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>2, "value" => "nota->nota"]) }}
                            <button type="submit" class="btn btn-primary" >Guardar</button>
                           
                           
                         </div>
                        </div>
                      </div>
                         <div class="form-group">
            
                                  {{ Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"hidden" ,"readonly","value" => "lead->id"]) }}
                                  {!! $errors->first('leads_id', '<div class="invalid-feedback">:message</div>') !!}
                         </div>
                          <div class="form-group">
            
                                    {{ Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"]) }}
                                    {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
                         </div>
                      <p class="demo-inline-spacing">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                          Escribir Nota
                        </a>  
                      </p> 
                     </div> 
                      
                      
                      </div>  
                       </form>
                    @endcan
                        @endhasrole
                            @hasrole('Administrador|Gerente Ventas|Gerente|Ventas')

                          <div class="mb-3 col-md-2">
                            <label class="form-label">Usuario:</label>
                            <p><b>{{ $lead->user->name }}</b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                              <label class="form-label">Estado:</label>
                                                @if($lead->statuses_id == '1')
                                          <p><b>  <span class="badge bg-label-warning me-1">{{ $lead->statuses->nombre}} </span> </font></b></p>
                                                @elseif($lead->statuses_id == '2')
                                          <p><b><span class="badge bg-label-info me-1 ">{{ $lead->statuses->nombre}} </span> </font></b></p>
                                                @elseif($lead->statuses_id == '3')
                                          <p><b><span class="badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></b></p>
                                                @elseif($lead->statuses_id == '4')
                                          <p><b><span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span> </font></b></p>
                                                @elseif($lead->statuses_id == '5')
                                           <p><b><span class="badge bg-label-success me-1 ">{{ $lead->statuses->nombre}} </span></b></p>
                                                @elseif($lead->statuses_id == '6')
                                            <p><b><span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span></b></p>
                                                @else($lead->statuses_id == '7')
                                            <p><b><span class="badge bg-label-secondary me-1">{{ $lead->statuses->nombre}} </span></b></p>
                                                 @endif  
                          
                        </div>
                        
                          <form action="{{ route('lead.showStore',$lead->id) }}" method="POST">
                              
                              @csrf
                        <div class="collapse" id="collapseExample">
                        <div class="d-grid d-sm-flex p-6 ">
                          <div class="input-group input-group-merge">
                                    {{ Form::textArea('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>2, "value" => "nota->nota"]) }}
                            <button type="submit" class="btn btn-primary" >Guardar</button>
                           
                           
                         </div>
                        </div>
                      </div>
                         <div class="form-group">
            
                                  {{ Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"hidden" ,"readonly","value" => "lead->id"]) }}
                                  {!! $errors->first('leads_id', '<div class="invalid-feedback">:message</div>') !!}
                         </div>
                          <div class="form-group">
            
                                    {{ Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"]) }}
                                    {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
                         </div>
                      <p class="demo-inline-spacing">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                          Escribir Nota
                        </a>  
                      </p> 
                     </div> 
                      
                      
                      </div>  
                       </form>
                  
                        @endhasrole
                
              </div>
            
            
     </div>
 </div>
 

 
    
    @hasrole('Administrador|Gerente Ventas|Gerente|Ventas')      
           <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota') }}
                            </span>


                        </div>
                    </div>


                   
                    
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>Operador</th>
                                        <th>Nota</th>
                                        <th>Fecha de creacion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($notas as $nota)
                                        <tr>
                                         <td>{{ $nota->user}}</td>
                                            <td style="max-width: 300px;">{{ $nota->nota }}</td>
                                            <td>{{ date('d-m-Y h:i:s', strtotime($nota->created_at))}}</td>
                                            <td>
                                            </td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>           
@endhasrole

        
            
        
       

     
    </section>
    
@endsection