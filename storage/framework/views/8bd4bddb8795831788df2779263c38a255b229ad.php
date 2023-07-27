<div class="box box-info padding-1">
    <div class="box-body">
        

    </div>
            <div class="form-group">
            <?php echo e(Form::label('name')); ?>

            <?php echo e(Form::text('name', $cerrador->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'name'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
             </div>
     
                    </div>
                
               
            
        <?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/cerrador/form.blade.php ENDPATH**/ ?>