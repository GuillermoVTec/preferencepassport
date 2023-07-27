@extends('layouts.app')

@section('template_title')
    Lead Adminnn
@endsection

@section('content')

            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                @if($res === 'abiertas')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Abiertas</h4>
                @endif
                @if($res === 'datospendientes')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Documentos Pendientes</h4>
                @endif
                @if($res === 'suspendida')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Suspendida</h4>
                @endif
                @if($res === 'rechazadaporelhotel')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Rechazada por el Hotel</h4>
                @endif
                 @if($res === 'cancelada')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Cancelada</h4>
                @endif
                @if($res === 'solicitada')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Solicitada</h4>
                @endif
                @if($res === 'pagodefeependiente')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Pago de Fee Pendiente</h4>
                @endif
                @if($res === 'pre')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Pre Confirmada</h4>
                @endif
                @if($res === 'confirmada')
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Confirmada</h4>
                @endif
                <div class="card">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   <form >
                    <div class="card-body">
                                        
                  <div class="row gx-3 gy-2 align-items-center">
                       
                    <div class="col-md-2">
                      <label  class="form-label" for="selectTypeOpt">Desde:</label>
                     
                      <input v class="form-control m"name="fecha1"type="date" >
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="selectPlacement">Hasta:</label>
                     
                      <input  class="form-control "name="fecha2"type="date" >
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <button id="showToastPlacement" class="btn btn-outline-primary d-block">Buscar</button>
                    </div>

                  
                  
                             @csrf
                        <div class="col-md-2">
                         <label class="form-label" for="selectPlacement">Buscar por nombre:</label>
                         <input class="form-control d-block" type="search"  name="busqueda"  placeholder="Buscar en mis leads" aria-label="Search" />
                        </div>
                         <div class="col-md-1">
                         <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button class="btn btn-outline-primary d-block" type="submit">Buscar</button>
                        </div>
                        <div class="col-md-1">
                        <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button type="submit" class="btn btn-icon btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                        </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('home') }}">Regresar</a></small></h5>
                    </div>
                    

                  </form>
                   


                  </div>
                </div>
                    
                        
                         <small class="text-muted float-end">

                 </small>
                </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>✏️ ID</th>
                                        <th>✏️ Matriculasss</th>
                                        
										<th>👨🏻‍💻 Vendedor</th>
										<th>👨🏻‍💻 Nombre</th>
										<th>Edad</th>
										
										<th>📱 Telefono</th>
										
										<th>✉️ Correo</th>
										<th>🌐 País</th>
                                        <th>🌐 Fecha</th>
                                        <th>🌐 Estado</th>
                                       
										
						

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                               
                                    @foreach ($leads as $lead)
                                        <tr>
                                           <td>{{ $lead->id }}</td>
                                            @if(isset($lead->User->distribuidore->matriculaid))
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{$lead->User->distribuidore->matriculaid.$lead->User->distribuidore->id}}</strong></td>
                                                                
                                            @else
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{'VC'.$lead->User->id}}</strong></td>
                                            @endif
                                            	@foreach ($usuariosConRol as  $usuarios)
									            @if($lead->id_vendedor == $usuarios->id)
							                    <td>{{ $usuarios->name}}</td>
                                                @endif
                                                
                                                @endforeach
                                       
                                         @if($lead->id_vendedor == null)
							                    <td>{{'No asignado'}}</td>
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
                                                @elseif($lead->statuses_id == '6')
                                            <td> <span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '7')
                                            <td> <span class="badge bg-label-secondary me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '8')
                                            <td ><span class=" badge bg-label-warning me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '9')
                                            <td><span class="badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </font></td>
                                                @elseif($lead->statuses_id == '10')
                                            <td> <span class="badge bg-label-success me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '11')
                                            <td><span class="badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '12')
                                            <td> <span class=" badge bg-label-success me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '13')
                                            <td> <span class=" badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '14')
                                            <td> <span class=" badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '15')
                                            <td> <span class=" badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '16')
                                            <td> <span class=" badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '17')
                                            <td> <span class=" badge bg-label-warning me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '18')
                                            <td> <span class=" badge bg-label-danger me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '19')
                                            <td> <span class=" badge bg-label-secondary me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @elseif($lead->statuses_id == '20')
                                            <td> <span class=" badge bg-label-info me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                @else($lead->statuses_id == '21')
                                            <td> <span class="badge bg-label-warning me-1">{{ $lead->statuses->nombre}} </span> </font></td>
                                                 @endif
										

                                            <td>
                                                <div >
                                                 <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                 <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                <form action="{{ route('lead.destroy',$lead->id) }}" method="POST">
                                                    
                                                  
                                                    <a class="dropdown-item" href="{{ route('worksheet',$lead->id) }}"><i class="bx bx-show-alt me-1"></i> worksheet</a>
                                                    

                                                    
                                                   
                                                    
                                           
                                                </form>
                                                 </div>
                                          </div>
                                            </td>
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
