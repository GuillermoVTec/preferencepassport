<div class="box box-info padding-1">
            <div class="form-check form-switch">
            @if($user->status == 1)
             <input name="status"  class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
             <label class="form-check-label" for="flexSwitchCheckDefault">Desactivar.</label>
            @else
            <input name="status"  class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Activar.</label>
            @endif
             
        </div>
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', "", ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => '*******']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
            
    </div>
     <br> </br>
    <div class="form-group ">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
             </div>
     
                    </div>
                </div>
               
            </div>
        </div>