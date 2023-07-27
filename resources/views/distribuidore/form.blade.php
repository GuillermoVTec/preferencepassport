<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Razon Social</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-buildings'></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('razonsocial') is-invalid @enderror" name="razonsocial" value="{{$distribuidore->razonsocial}}"  autocomplete="razonsocial" autofocus placeholder = 'razon social'>

            {!! $errors->first('razonsocial', '<div class="invalid-feedback">El campo Razon Social es obligatorio.</div>') !!}
        </div>
        
          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Representante Legal</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('representantelegal') is-invalid @enderror" name="representantelegal" value="{{$distribuidore->representantelegal}}"  autocomplete="representantelegal" autofocus placeholder = 'Representante legal'>

            {!! $errors->first('representantelegal', '<div class="invalid-feedback">El campo Representante Legal es obligatorio.</div>') !!}
        </div>
        
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">RFC</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-spreadsheet'></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{$distribuidore->rfc}}"  autocomplete="rfc" autofocus placeholder = 'RFC'>

            {!! $errors->first('rfc', '<div class="invalid-feedback">El campo RFC es obligatorio.</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $distribuidore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $distribuidore->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais') }}
            {{ Form::text('pais', $distribuidore->pais, ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cp') }}
            {{ Form::text('cp', $distribuidore->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $distribuidore->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $distribuidore->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $distribuidore->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('matriculaid') }}
            {{ Form::text('matriculaid', $distribuidore->matriculaid, ['class' => 'form-control' . ($errors->has('matriculaid') ? ' is-invalid' : ''), 'placeholder' => 'Matriculaid']) }}
            {!! $errors->first('matriculaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>

</div>
             
     
                    </div>
                </div>
               
            </div>
        </div>