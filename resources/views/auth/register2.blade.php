@extends('layouts.app')

@section('content')


                 <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Agregar Distribuidor</h4>

                <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                   
                    <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                        @csrf
    

                <div class="card-body">
                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div>
                    <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="{{ route('home') }}">Regresar</a></small></h5>
                 <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                          name="avatar2"                        />

                        <div class="button-wrapper">

                          <label for="avatarFile" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Foto de Perfil</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              

                              type="file"
                              id="avatarFile"
                              name="avatar"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>

                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Restaurar</span>
                          </button>

                          <p class="text-muted mb-0">Acepta JPG, GIF or PNG. Tamaño Max. 800K</p>
                        </div>
                      </div>
                    </div> 
                 </div>
                  <hr class="my-0">
                    <div class="card-body">

                        <div class="row">
                            
                        <div class="mb-3 col-md-6">
                                      {{ Form::label('Razon social') }}
                                      {{ Form::text('razonsocial', '', ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), ]) }}
                                      {!! $errors->first('razonsocial', '<div class="invalid-feedback">El campo Razon Social es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-6">
                                     {{ Form::label('Representante') }}
                                     {{ Form::text('representantelegal', '', ['class' => 'form-control' . ($errors->has('representantelegal') ? ' is-invalid' : ''), ]) }}
                                     {!! $errors->first('representantelegal', '<div class="invalid-feedback">El campo Representante Legal es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-6">
                                      {{ Form::label('Rfc') }}
                                      {{ Form::text('rfc', '', ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), ]) }}
                                      {!! $errors->first('rfc', '<div class="invalid-feedback">El campo RFC es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-6">
                                      {{ Form::label('Direccion') }}
                                      {{ Form::text('direccion', '', ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), ]) }}
                                      {!! $errors->first('direccion', '<div class="invalid-feedback">El campo Direccion es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-4">
                                     {{ Form::label('Ciudad') }}
                                     {{ Form::text('ciudad', '', ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''),  ]) }}
                                     {!! $errors->first('ciudad', '<div class="invalid-feedback">El campo Ciudad es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-4">
                                    {{ Form::label('Pais') }}
                                    {{ Form::text('pais', '', ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), ]) }}
                                    {!! $errors->first('pais', '<div class="invalid-feedback">El campo Pais es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-4">
                                    {{ Form::label('Codigo postal') }}
                                    {{ Form::text('cp', '', ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), ]) }}
                                    {!! $errors->first('cp', '<div class="invalid-feedback">El campo Codigo Postal es obligatorio.</div>') !!}
                        </div>


                        <div class="mb-3 col-md-4">
                                     {{ Form::label('Telefono') }}
                                     {{ Form::text('telefono', '', ['class' => 'form-control' . ($errors->      has('telefono') ? ' is-invalid' : ''), ]) }}
                                    {!! $errors->first('telefono', '<div class="invalid-feedback">El campo Telefono es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-4">
                                    {{ Form::label('Fecha de inicio de Contrato') }}
                                    {{ Form::date('date', '', ['class' => 'form-control' . ($errors->has('date') ? '       is-invalid' : ''), 'placeholder' => 'Date','id'=>"html5-date-input"]) }}
                                    {!! $errors->first('date', '<div class="invalid-feedback">El campo Fecha es obligatorio.</div>') !!}
                        </div>
                        <div class="mb-3 col-md-4">
                                    {{ Form::label('Matricula') }}
                                    {{ Form::text('matriculaid', '', ['class' => 'form-control' . ($errors->has('matriculaid') ? ' is-invalid' : ''), ]) }}
                                    {!! $errors->first('matriculaid', '<div class="invalid-feedback">El campo Matricula es obligatorio.</div>') !!}
                        </div>
                        </div>
                        <hr class="my-0" />
                        
                        <h5 class="card-header">Accesos</h5>
                         <div class="row">
                        <div class="mb-3 col-md-6">
                                <label >{{ __('Nombre De Usuario') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" >
                                        {{ $message }}
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="mb-3 col-md-6">
                            <label >{{ __('Correo Electronico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" >
                                        {{ $message }}
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            
                        <div class=" form-password-toggle   form-password-toggle">
                            <label for="password">{{ __('Password') }}</label>
                            <div class="input-group input-group-merge">

                          <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="basic-default-password-confirm"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password"
                            name="password"
                            autocomplete="new-password"
                            
                          />

                            <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                                @error('password')
                                    <span class="invalid-feedback" >
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>


                         <div class="mb-3 col-md-4">
                            
                        <div class=" form-password-toggle   form-password-toggle">
                            <label    for="basic-default-password-confirm" >{{ __('Confirm Password') }}</label>
                            <div class="input-group input-group-merge">

                          <input
                            type="password"
                            class="form-control"
                            id="basic-default-password-confirm"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password"
                            name="password_confirmation"

                          />
                            <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                            
                            </div>
                        </div>
                         </div>
                        

                        <div class="mb-3 col-md-4 ">
                        <label >Rol:</label>
                    
                        <select name='roles' class="form-select" id="exampleFormControlSelect1">
                        
                        <option value="Distribuidor">Distribuidor</option>
                        
                        </select>
                        
                       
                         </div>
                       
                            <div class="mt-2">
                                <button type="submit"  class="btn btn-primary me-2">
                                    {{ __('Guardar') }}
                                </button>
                                <a type="reset" href="{{ route('home') }}" class="btn btn-outline-secondary">Cancelar </a>
                                 
                        
                          

                         

                    </form>
                                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
          
@endsection

