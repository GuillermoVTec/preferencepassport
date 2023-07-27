@extends('layouts.app')

@section('template_title')
    Update User
@endsection

@section('content')
  
        
           

        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary"  href="{{ route('users.index') }}"><i class="fa fa-fw fa-edit"></i> Regresar</a></small></h5>
                    </div>
                    <div class="card-body">
                        
                        <form method="POST"  action="{{ route('users.update', $user->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                          @include('user.form')
                          
                              <br> </br>
                          </form>
                         
                        </div>
     
                    </div>
                </div>
               
            </div>
        </div>
        
    
@endsection
