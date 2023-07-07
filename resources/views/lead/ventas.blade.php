@extends('layouts.app')

@section('template_title')
    
@endsection

@section('content')

            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
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
                         <div class="col-md-2">
                         <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button class="btn btn-outline-primary d-block" type="submit">Buscar</button>
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
                                        
										<th>👨🏻‍💻 Nombre</th>
										<th>Edad</th>
										
										<th>📱 Telefono</th>
										
										<th>✉️ Correo</th>
										<th>🌐 País</th>
                                        <th>🌐 Fecha</th>
                                       
										
						

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                               
                                    @foreach ($leads as $lead)
                                        <tr>
                                            
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{$lead->id}}</strong></td>
                                            
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
                                            <td> <span class=" badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '4')
                                            <td><span class="badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '5')
                                            <td><span class="badge bg-label-success me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @elseif($lead->statuses_id == '6')
                                            <td><span class="badge bg-label-danger me-1 ">{{ $lead->statuses->nombre}} </span> </font></td>
                                                @else($lead->statuses_id == '7')
                                            <td> <span class="badge bg-label-secondary me-1">{{ $lead->statuses->nombre}} </span>  </td>
                                                 @endif
                                            
											
										

                                            <td>
                                                <div >
                                                 <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                 <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                <form action="{{ route('lead.destroy',$lead->id) }}" method="POST">
                                                     @if($lead->statuses->id === '8' or $lead->statuses->nombre === 'PRE REGISTRO')
                                                    <a class="dropdown-item" href="{{ route('worksheet',$lead->id) }}"><i class="bx bx-show-alt me-1"></i> worksheet</a>
                                                    @endif

                                                    
                                                   
                                                    
                                                    @if($lead->statuses->nombre === 'ACTIVAR' or $lead->statuses->nombre === 'NUEVA' or $lead->statuses->nombre === 'SEGUIMIENTO' or $lead->statuses->nombre === 'NO CONTESTO' or $lead->statuses->nombre === 'NO INTERESADO' or $lead->statuses->nombre ==='DATOS INCORRECTOS')
                                                    <a class="dropdown-item" href="{{ route('lead.show',$lead->id) }}"><i class="bx bx-show-alt me-1"></i> ver</a>

                                                    @endif
                                                    
                                                    @can('Editar lead')
                                                    <a class="dropdown-item" href="{{ route('lead.edit',$lead->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    @endcan
                                                    @csrf
                                                    @can('borrar lead')
                                                    @method('DELETE')
                                                    <button type="submit"class="dropdown-item"><i class="bx bx-trash me-1"></i>Eliminar </button>
                                                    @endcan
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
