<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('leads_id') }}
            {{ Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : ''), 'placeholder' => 'Leads Id']) }}
            {!! $errors->first('leads_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>