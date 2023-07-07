

@extends('layouts.app')

@section('template_title')
    Lead Admin
@endsection

@section('content')
     <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-bx bx-detail me-1"></i> Asignación lead</h4>

              <div class="row">
                <div class="col-xl">
                <div class="card mb-5">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   <form >
                       @csrf

                      <div class="card-body">
                      <div class="row gy-3">
                      <p style="margin-bottom: -10px !important;">Consultar leads</p>
                        <div class="col-sm-5">
                        <div class="demo-inline-spacing">
                        <small class="text-muted">Distribuidor
                        <select id="select2" name="matriculaid" aria-hidden="true"  class="form-select form-select-sm">

                            <option value=""> Todos </option>
                                @foreach ($distribuidores as  $distribuidor)
                                          <option value="{{ $distribuidor->id }}"> {{ $distribuidor->name."-".$distribuidor->roles()->first()->name}} </option>
                                @endforeach
                        </select>
                        </div>
                       </small>
                       </div>
                       
                       <div class="col-sm-6">
                       <div class="demo-inline-spacing">
                        <small class="text-muted">Estado
                        <div class="input-group input-group-merge">
                        <select id="status" name="status"  class="form-select form-select-sm">

                            <option value=""> Todos </option>
                                
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                <option value="5">ACTIVADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                        </select>
                        <button id="showToastPlacement" class="btn btn-sm btn-outline-primary d-block">Buscar</button>
                        </div>
                        </small>
                       </div> 
                        </div>
                        
                             <div class="col-sm-1">
                        <small class="text-muted ">&nbsp;
                         <button type="submit" class="btn btn-sm btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                         </small>
                        </div>
                      </form>
                      <hr >
                      
                    <form  method="get" action="{{ route('lead.asignar') }}" enctype="multipart/form-data">
                     @csrf
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                     <div class="row gy-3">
                       <p style="margin-bottom: -10px !important;">Reasignar leads /  {{$count}} Leads</p> 
                        <div class="col-sm-3">
                          <div class="demo-inline-spacing">
                            <input class="form-control form-control-sm" name="nlead" id="nlead" placeholder="Numero de leads">
                            </input>
                            </div>
                            </div>
                    
                    <div class="col-sm-3">
                    <div class="demo-inline-spacing">
                        <select id="matriculaid" name="matriculaid"  class="form-select form-select-sm">
                        <option value=""> Seleccionar usario </option>
                                @foreach ($distribuidores as  $distribuidor)
                                          <option value="{{ $distribuidor->id }}"> {{ $distribuidor->name."-".$distribuidor->roles()->first()->name}} </option>
                                @endforeach
                        </select>
                        </div>
                        </div>
                        <div class="col-sm-3">
                         <div class="demo-inline-spacing">
                        <select id="statusb" name="statusb"  class="form-select form-select-sm">
                        <option value="">Selecione estado de los leads a asignar. </option>
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                <option value="5">ACTIVADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                        </select>
                        </div>
                        </div>
                    <div class="col-sm-3">
                    <div class="demo-inline-spacing">
                        <div class="input-group input-group-merge">
                        <select id="Uventas" name="Uventas"  class="form-select form-select-sm">

                            <option value="">Selecione al vendedor. </option>
                                @foreach ($usuariosConRol as  $usuarios)
                                          <option value="{{ $usuarios->id }}"> {{ $usuarios->name}} </option>
                                @endforeach
                         </select>
                            <button id="showToastPlacement" class="btn btn-sm btn-outline-primary d-block">Asignar</button>
                        </div>
                        </div>
                        
                  </form>
                  </div>
                  </div>


                </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>✏️ ID</th>

										<th>👨🏻‍💻 Nombre</th>
										<th>Edad</th>

										<th>📱 Telefono</th>

										<th>✉️ Correo</th>
										<th>🌐 País</th>
                                        <th>🌐 Fecha de creacion</th>
                                        <th>🌐 Estado</th>




                                       
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @foreach ($leads as $lead)
                                        <tr>

                                            @if(isset($lead->User->distribuidore->matriculaid))
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{'000'.$lead->User->distribuidore->matriculaid.$lead->User->distribuidore->id}}</strong></td>

                                            @else
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{'000'.'VC'.$lead->User->id}}</strong></td>
                                            @endif
											<td>{{ $lead->nombre }}</td>
											<td>{{ $lead->edad }}</td>

											<td>{{ $lead->telefono1 }}</td>

											<td>{{ $lead->correo }}</td>
											<td>{{ $lead->pais }}</td>
                                            <td>{{ $lead->created_at->format('d-m-Y') }}</td>


                                                 @if($lead->statuses_id == '1')
                                            <td ><span class=" badge bg-label-warning me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '2')
                                            <td><span class="badge bg-label-info me-1">{{ $lead->statuses->nombre}} </span>  </font></td>
                                                @elseif($lead->statuses_id == '3')
                                            <td> <span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '4')
                                            <td><span class="badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '5')
                                            <td> <span class=" badge bg-label-success me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @else($lead->statuses_id == '6')
                                                <td> <span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                 @endif



                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $leads->links() }}

                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
