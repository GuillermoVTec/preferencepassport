@extends('layouts.app')

@section('template_title')
    Distribuidores
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Lista general de distribuidores</h4>
            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="card-header">
                    </div>
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
                         <label class="form-label" for="selectPlacement">Buscar por matricula id:</label>
                         <input class="form-control d-block" type="search"  name="busqueda"  placeholder="Buscar por matricula" aria-label="Search" />
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
                    <small class="text-muted float-end"></small>
                    </h5>
                    <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>Matricula</th>
										<th>Representante</th>
										<th>Rfc</th>
										
										<th>Ciudad</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Date</th>
									
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($distribuidores as $distribuidore)
                                        <tr>
                                            <td>{{ $distribuidore->matriculaid.$distribuidore->id }}</td>
											<td>{{ $distribuidore->representantelegal }}</td>
											<td>{{ $distribuidore->rfc }}</td>
											<td>{{ $distribuidore->ciudad }}</td>
											<td>{{ $distribuidore->User->email }}</td>
											<td>{{ $distribuidore->telefono }}</td>
											<td>{{ $distribuidore->date }}</td>
										
											

                                            <td>



                                                     <div >
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                <form action="{{ route('distribuidores.destroy',$distribuidore->id) }}" method="POST">
                                                    <a class="dropdown-item" href="{{ route('distribuidores.show',$distribuidore->id) }}"><i class="bx bx-show-alt me-1"></i> Ver</a>
                                                    
                                                    <a class="dropdown-item" href="{{ route('distribuidores.edit',$distribuidore->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"class="dropdown-item"><i class="bx bx-trash me-1"></i>Eliminar </button>
                                                </form>
                                                 </div>
                                          </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         {{ $distribuidores->links() }}
                        </div>
                                        
                </div>
               
            </div>
        </div>
                
                

@endsection
