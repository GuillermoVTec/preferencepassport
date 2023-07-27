@extends('layouts.app')

@section('template_title')
    Cerrador
@endsection

@section('content')
    <div>
        <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Lista general de cerradores</h4>
        <div class="row">
            <div class="col-sm-12">
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
                   
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($cerradors as $cerrador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                             <td>{{ $cerrador->name }}</td>
                                            

                                            <td>
                                             <div >
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                <form action="{{ route('cerradors.destroy',$cerrador->id) }}" method="POST">
                                                    
                                                    
                                                    <a class="dropdown-item" href="{{ route('cerradors.edit',$cerrador->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    
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
                {!! $cerradors->links() !!}
            </div>
        </div>
    </div>
                 </div>
     
                    </div>
                
               
            
        
@endsection
