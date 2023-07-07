@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
  
<h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Lista de usuarios</h4>
                 <div class="card">
                    

                    
                         @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   <form >
                    <div class="card-body">
                                        
                  <div class="row gx-3 gy-2 align-items-center">
                                                    @csrf
                        <div class="col-md-2">
                         <label class="form-label" for="selectPlacement">Buscar por nombre:</label>
                         <input class="form-control d-block" type="search"  name="busqueda"  placeholder="Buscar en mis leads" aria-label="Search" />
                        </div>
                         <div class="col-md-1">
                         <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button class="btn btn-outline-primary d-block" type="submit">Buscar</button>
                         </div>
                         <div class="col-md-2">
                        <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button type="submit" class="btn btn-icon btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                        </div>


                    <div class="col-md-2">
                     
                     
                      
                    </div>
                    <div class="col-md-2">
                     
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('home') }}">Regresar</a></small></h5>
                    </div>
                 </div> 
                </div>   

                    

                  </form>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>Num</th>
                                        
										<th>Nombre</th>
										<th>Correo</th>
										<th>Rol</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" >
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}</td>
											
											<td>{{ $user->email }}</td>
											<td>{{ $user->roles()->first()->name }}</td>
											     @if($user->status == '0')
                                                <td> <span class="badge bg-label-danger me-1 ">{{ 'Inactivo' }} </span>  </td>
                                                 @else($user->status == '1')
                                                <td> <span class=" badge bg-label-success me-1">{{ 'Activo' }} </span> </font></td>
                                                 @endif

                                            <td>
                                             <div >
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    
                                                    
                                                    <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                </form>
                                                 </div>
                                          </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                {!! $users->links() !!}
            </div>
        
    </div>
@endsection
