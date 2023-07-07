<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('calificacion') }}
            {{ Form::text('calificacion', $worksheet->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion']) }}
            {!! $errors->first('calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('booking') }}
            {{ Form::text('booking', $worksheet->booking, ['class' => 'form-control' . ($errors->has('booking') ? ' is-invalid' : ''), 'placeholder' => 'Booking']) }}
            {!! $errors->first('booking', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ocupaciont') }}
            {{ Form::text('ocupaciont', $worksheet->ocupaciont, ['class' => 'form-control' . ($errors->has('ocupaciont') ? ' is-invalid' : ''), 'placeholder' => 'Ocupaciont']) }}
            {!! $errors->first('ocupaciont', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombrec') }}
            {{ Form::text('nombrec', $worksheet->nombrec, ['class' => 'form-control' . ($errors->has('nombrec') ? ' is-invalid' : ''), 'placeholder' => 'Nombrec']) }}
            {!! $errors->first('nombrec', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edadc') }}
            {{ Form::text('edadc', $worksheet->edadc, ['class' => 'form-control' . ($errors->has('edadc') ? ' is-invalid' : ''), 'placeholder' => 'Edadc']) }}
            {!! $errors->first('edadc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ocupácionc') }}
            {{ Form::text('ocupácionc', $worksheet->ocupácionc, ['class' => 'form-control' . ($errors->has('ocupácionc') ? ' is-invalid' : ''), 'placeholder' => 'Ocupácionc']) }}
            {!! $errors->first('ocupácionc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadocivilc') }}
            {{ Form::text('estadocivilc', $worksheet->estadocivilc, ['class' => 'form-control' . ($errors->has('estadocivilc') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivilc']) }}
            {!! $errors->first('estadocivilc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingresos') }}
            {{ Form::text('ingresos', $worksheet->ingresos, ['class' => 'form-control' . ($errors->has('ingresos') ? ' is-invalid' : ''), 'placeholder' => 'Ingresos']) }}
            {!! $errors->first('ingresos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarjetas') }}
            {{ Form::text('tarjetas', $worksheet->tarjetas, ['class' => 'form-control' . ($errors->has('tarjetas') ? ' is-invalid' : ''), 'placeholder' => 'Tarjetas']) }}
            {!! $errors->first('tarjetas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $worksheet->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cp') }}
            {{ Form::text('cp', $worksheet->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plataforma') }}
            {{ Form::text('plataforma', $worksheet->plataforma, ['class' => 'form-control' . ($errors->has('plataforma') ? ' is-invalid' : ''), 'placeholder' => 'Plataforma']) }}
            {!! $errors->first('plataforma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localizador') }}
            {{ Form::text('localizador', $worksheet->localizador, ['class' => 'form-control' . ($errors->has('localizador') ? ' is-invalid' : ''), 'placeholder' => 'Localizador']) }}
            {!! $errors->first('localizador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::text('moneda', $worksheet->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('leads_id') }}
            {{ Form::text('leads_id', $worksheet->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : ''), 'placeholder' => 'Leads Id']) }}
            {!! $errors->first('leads_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>