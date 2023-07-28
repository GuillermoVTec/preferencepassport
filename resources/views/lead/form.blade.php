
           <select  name='idioma' class="form-select" >
               <option value="es" >es</option>
               <option value="us" >us</option>
           </select>
     
          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Nombre Completo</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('nombre') is-invalid @enderror" name="nombre"  value="{{$lead->nombre}}"  autocomplete="nombre" autofocus placeholder = 'nombre completo'>

            {!! $errors->first('nombre', '<div class="invalid-feedback">El campo Nombre es obligatorio.</div>') !!}
        </div>
        
        </div>
          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Edad</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-analyse'></i></span>
            <input   type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" id="age" maxlength="3" value="{{$lead->edad}}"  autocomplete="Edad" autofocus placeholder = 'Edad' onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            
            {!! $errors->first('edad', '<div class="invalid-feedback">El campo Edad es solo numerico obligatorio.</div>') !!}
        </div>

        </div>

          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Estado civil</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-user-detail' ></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text" class="form-control @error('estadocivil') is-invalid @enderror" name="estadocivil"  value="{{$lead->estadocivil}}"  autocomplete="estadocivil"  placeholder = 'estado civil'>

            {!! $errors->first('estadocivil', '<div class="invalid-feedback">El campo Estado civil es obligatorio.</div>') !!}
        </div>
        </div>
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-phone2">Teléfono 1</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone2" type="text" class="form-control @error('telefono1') is-invalid @enderror" name="telefono1"  value="{{$lead->telefono1}}"  autocomplete="telefono1"  placeholder = 'Telefono obligatorio'>

            {!! $errors->first('telefono1', '<div class="invalid-feedback">El campo Estado Telefono  es obligatorio.</div>') !!}
        </div>
        </div>
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-phone">Teléfono 2</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control @error('telefono2') is-invalid @enderror" name="telefono2" value="{{$lead->telefono2}}"   autocomplete="telefono2"  placeholder = 'Telefono obligatorio'>
        {!! $errors->first('telefono2', '<div class="invalid-feedback">El campo Estado Telefono  es obligatorio.</div>') !!}
            
        </div>
        </div>                          
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-email">Correo Electronico</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-email" type="text" class="form-control @error('correo') is-invalid @enderror" name="correo"  value="{{$lead->correo}}"  autocomplete="correo" autofocus placeholder = 'Correo electronico'>
                {!! $errors->first('correo', '<div class="invalid-feedback">El campo Correo  es obligatorio en formato .+@globex\.com</div>') !!}
            
        </div>
        </div>
                <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-company">País</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-globe"></i></span>
                
                <input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais"  value="{{$lead->pais}}"  autocomplete="pais" autofocus placeholder = 'Pais'>
                {!! $errors->first('correo', '<div class="invalid-feedback">El campo Correo  es obligatorio.</div>') !!}
            
        </div>
        </div>
                <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-company">Nota</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-globe"></i></span>
                <input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="text" class="form-control @error('notal') is-invalid @enderror" name="notal"  value="{{$lead->notal}}"  autocomplete="notal" autofocus placeholder = 'nota'>
                {!! $errors->first('notal', '<div class="invalid-feedback">El campo no  es obligatorio.</div>') !!}
            
        </div>
        </div>


<input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{$password}}"  autocomplete="password" autofocus placeholder = 'Password'>
        
  

        <div class="form-group">
            
            {{ Form::text('user_id', $username, [ 'class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''),"readonly", "hidden" ,"value" => "username"])  }}

            {!! $errors->first('user_id', '<div class="invalid-feedback">El campo Estado Usuario  es obligatorio.</div>') !!}
        </div>
       
               <div class="form-group">
            
            {{ Form::text('created_at2', $date, [ 'class' => 'form-control' . ($errors->has('created_at2') ? ' is-invalid' : ''),"readonly", "hidden" ,"value" => "date"])  }}
            {{ Form::text('user_name', $username2,  [ 'class' => 'form-control' . ($errors->has('user_name') ? ' is-invalid' : ''),"readonly","hidden" ,"value" => "username2", "name"=>"username2" ])  }}
            {!! $errors->first('created_at2', '<div class="invalid-feedback">El campo Estado Fecha  es obligatorio.</div>') !!}
        </div>
        <div class="form-group">
             
            {{ Form::label('status') }}
           
           
         <select  name='statuses_id' class="form-select" id="exampleFormControlSelect1">
               
                                 @if($action === 'edit')
                                 <option value="{{$lead->statuses_id}}" > Seleccionar nuevo status</option> 
                                @endif
                                 <option value="1" >NUEVA</option>
                                 @if($action === 'edit')
                                 <option value="2">SEGUIMIENTO</option>
                                 <option value="3">NO CONTESTO</option>
                                 <option value="4">NO INTERESADO</option>
                                 <option value="5">ACTIVADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                                  @endif

        </select>
        {!! $errors->first('statuses_id', '<div class="invalid-feedback">:message</div>') !!}
        {{ Form::label('Tarjeta') }}
        <select  name='tarjeta' class="form-select" id="exampleFormControlSelect1">
               

              <option value="Tarjeta Classic" >Tarjeta Classic</option>
              <option value="Tarjeta Gold" >Tarjeta Gold</option>
              <option value="Tarjeta Platinum" >Tarjeta Platinum</option>
              <option value="Tarjeta Black" >Tarjeta Black</option>
             


        </select>
       
        {!! $errors->first('tarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
         @if(empty($nota))

         @else

        @can('ver nota')
        
        <div class="form-group">
            {{ Form::label('Nota') }}
            {{ Form::textArea('nota', $nota->nota,   ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>5, "value" => "nota->nota"  ]) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">El campo Estado Nota es opcional  es obligatorio.</div>') !!}
        </div>
        <div class="form-group">
            
            {{ Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"readonly", "hidden","value" => "nota->leads_id"]) }}
            {!! $errors->first('leads_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            
            {{ Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"]) }}
            
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        @endcan

        @endif



  


