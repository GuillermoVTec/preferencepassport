<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('calificacion')); ?>

            <?php echo e(Form::text('calificacion', $worksheet->calificacion, ['class' => 'form-control' . ($errors->has('calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion'])); ?>

            <?php echo $errors->first('calificacion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('booking')); ?>

            <?php echo e(Form::text('booking', $worksheet->booking, ['class' => 'form-control' . ($errors->has('booking') ? ' is-invalid' : ''), 'placeholder' => 'Booking'])); ?>

            <?php echo $errors->first('booking', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('ocupaciont')); ?>

            <?php echo e(Form::text('ocupaciont', $worksheet->ocupaciont, ['class' => 'form-control' . ($errors->has('ocupaciont') ? ' is-invalid' : ''), 'placeholder' => 'Ocupaciont'])); ?>

            <?php echo $errors->first('ocupaciont', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nombrec')); ?>

            <?php echo e(Form::text('nombrec', $worksheet->nombrec, ['class' => 'form-control' . ($errors->has('nombrec') ? ' is-invalid' : ''), 'placeholder' => 'Nombrec'])); ?>

            <?php echo $errors->first('nombrec', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('edadc')); ?>

            <?php echo e(Form::text('edadc', $worksheet->edadc, ['class' => 'form-control' . ($errors->has('edadc') ? ' is-invalid' : ''), 'placeholder' => 'Edadc'])); ?>

            <?php echo $errors->first('edadc', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('ocupácionc')); ?>

            <?php echo e(Form::text('ocupácionc', $worksheet->ocupácionc, ['class' => 'form-control' . ($errors->has('ocupácionc') ? ' is-invalid' : ''), 'placeholder' => 'Ocupácionc'])); ?>

            <?php echo $errors->first('ocupácionc', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('estadocivilc')); ?>

            <?php echo e(Form::text('estadocivilc', $worksheet->estadocivilc, ['class' => 'form-control' . ($errors->has('estadocivilc') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivilc'])); ?>

            <?php echo $errors->first('estadocivilc', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('ingresos')); ?>

            <?php echo e(Form::text('ingresos', $worksheet->ingresos, ['class' => 'form-control' . ($errors->has('ingresos') ? ' is-invalid' : ''), 'placeholder' => 'Ingresos'])); ?>

            <?php echo $errors->first('ingresos', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('tarjetas')); ?>

            <?php echo e(Form::text('tarjetas', $worksheet->tarjetas, ['class' => 'form-control' . ($errors->has('tarjetas') ? ' is-invalid' : ''), 'placeholder' => 'Tarjetas'])); ?>

            <?php echo $errors->first('tarjetas', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('ciudad')); ?>

            <?php echo e(Form::text('ciudad', $worksheet->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad'])); ?>

            <?php echo $errors->first('ciudad', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('cp')); ?>

            <?php echo e(Form::text('cp', $worksheet->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp'])); ?>

            <?php echo $errors->first('cp', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('plataforma')); ?>

            <?php echo e(Form::text('plataforma', $worksheet->plataforma, ['class' => 'form-control' . ($errors->has('plataforma') ? ' is-invalid' : ''), 'placeholder' => 'Plataforma'])); ?>

            <?php echo $errors->first('plataforma', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('localizador')); ?>

            <?php echo e(Form::text('localizador', $worksheet->localizador, ['class' => 'form-control' . ($errors->has('localizador') ? ' is-invalid' : ''), 'placeholder' => 'Localizador'])); ?>

            <?php echo $errors->first('localizador', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('moneda')); ?>

            <?php echo e(Form::text('moneda', $worksheet->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda'])); ?>

            <?php echo $errors->first('moneda', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('leads_id')); ?>

            <?php echo e(Form::text('leads_id', $worksheet->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : ''), 'placeholder' => 'Leads Id'])); ?>

            <?php echo $errors->first('leads_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/worksheet/form.blade.php ENDPATH**/ ?>