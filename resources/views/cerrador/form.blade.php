<div class="box box-info padding-1">
    <div class="box-body">
        

    </div>
            <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $cerrador->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
             </div>
     
                    </div>
                
               
            
        