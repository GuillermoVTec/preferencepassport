<div class="box box-info padding-1">
            <div class="form-check form-switch">
            <?php if($user->status == 1): ?>
             <input name="status"  class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
             <label class="form-check-label" for="flexSwitchCheckDefault">Desactivar.</label>
            <?php else: ?>
            <input name="status"  class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Activar.</label>
            <?php endif; ?>
             
        </div>
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('name')); ?>

            <?php echo e(Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email')); ?>

            <?php echo e(Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email'])); ?>

            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('password')); ?>

            <?php echo e(Form::text('password', "", ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => '*******'])); ?>

            <?php echo $errors->first('password', '<div class="invalid-feedback">:message</div>'); ?>

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
        </div><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/user/form.blade.php ENDPATH**/ ?>