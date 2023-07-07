<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('costo_total') }}
            {{ Form::text('costo_total', $detallesDePago->costo_total, ['class' => 'form-control' . ($errors->has('costo_total') ? ' is-invalid' : ''), 'placeholder' => 'Costo Total']) }}
            {!! $errors->first('costo_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pakeo_agente') }}
            {{ Form::text('pakeo_agente', $detallesDePago->pakeo_agente, ['class' => 'form-control' . ($errors->has('pakeo_agente') ? ' is-invalid' : ''), 'placeholder' => 'Pakeo Agente']) }}
            {!! $errors->first('pakeo_agente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activacion') }}
            {{ Form::text('activacion', $detallesDePago->activacion, ['class' => 'form-control' . ($errors->has('activacion') ? ' is-invalid' : ''), 'placeholder' => 'Activacion']) }}
            {!! $errors->first('activacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reporte_fee') }}
            {{ Form::text('reporte_fee', $detallesDePago->reporte_fee, ['class' => 'form-control' . ($errors->has('reporte_fee') ? ' is-invalid' : ''), 'placeholder' => 'Reporte Fee']) }}
            {!! $errors->first('reporte_fee', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pago_inicial') }}
            {{ Form::text('pago_inicial', $detallesDePago->pago_inicial, ['class' => 'form-control' . ($errors->has('pago_inicial') ? ' is-invalid' : ''), 'placeholder' => 'Pago Inicial']) }}
            {!! $errors->first('pago_inicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pendiente_de_pago') }}
            {{ Form::text('pendiente_de_pago', $detallesDePago->pendiente_de_pago, ['class' => 'form-control' . ($errors->has('pendiente_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Pendiente De Pago']) }}
            {!! $errors->first('pendiente_de_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_limite') }}
            {{ Form::text('fecha_limite', $detallesDePago->fecha_limite, ['class' => 'form-control' . ($errors->has('fecha_limite') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Limite']) }}
            {!! $errors->first('fecha_limite', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_pago') }}
            {{ Form::text('fecha_de_pago', $detallesDePago->fecha_de_pago, ['class' => 'form-control' . ($errors->has('fecha_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Pago']) }}
            {!! $errors->first('fecha_de_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detallesDePago->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $detallesDePago->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_de_pago') }}
            {{ Form::text('status_de_pago', $detallesDePago->status_de_pago, ['class' => 'form-control' . ($errors->has('status_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Status De Pago']) }}
            {!! $errors->first('status_de_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pago_asignado') }}
            {{ Form::text('pago_asignado', $detallesDePago->pago_asignado, ['class' => 'form-control' . ($errors->has('pago_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Pago Asignado']) }}
            {!! $errors->first('pago_asignado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_aprovacion') }}
            {{ Form::text('num_aprovacion', $detallesDePago->num_aprovacion, ['class' => 'form-control' . ($errors->has('num_aprovacion') ? ' is-invalid' : ''), 'placeholder' => 'Num Aprovacion']) }}
            {!! $errors->first('num_aprovacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $detallesDePago->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comprovante') }}
            {{ Form::text('comprovante', $detallesDePago->comprovante, ['class' => 'form-control' . ($errors->has('comprovante') ? ' is-invalid' : ''), 'placeholder' => 'Comprovante']) }}
            {!! $errors->first('comprovante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('forma_de_pago') }}
            {{ Form::text('forma_de_pago', $detallesDePago->forma_de_pago, ['class' => 'form-control' . ($errors->has('forma_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Forma De Pago']) }}
            {!! $errors->first('forma_de_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('worksheet_id') }}
            {{ Form::text('worksheet_id', $detallesDePago->worksheet_id, ['class' => 'form-control' . ($errors->has('worksheet_id') ? ' is-invalid' : ''), 'placeholder' => 'Worksheet Id']) }}
            {!! $errors->first('worksheet_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>