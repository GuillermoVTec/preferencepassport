<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('costo_total')); ?>

            <?php echo e(Form::text('costo_total', $detallesDePago->costo_total, ['class' => 'form-control' . ($errors->has('costo_total') ? ' is-invalid' : ''), 'placeholder' => 'Costo Total'])); ?>

            <?php echo $errors->first('costo_total', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('pakeo_agente')); ?>

            <?php echo e(Form::text('pakeo_agente', $detallesDePago->pakeo_agente, ['class' => 'form-control' . ($errors->has('pakeo_agente') ? ' is-invalid' : ''), 'placeholder' => 'Pakeo Agente'])); ?>

            <?php echo $errors->first('pakeo_agente', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('activacion')); ?>

            <?php echo e(Form::text('activacion', $detallesDePago->activacion, ['class' => 'form-control' . ($errors->has('activacion') ? ' is-invalid' : ''), 'placeholder' => 'Activacion'])); ?>

            <?php echo $errors->first('activacion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('reporte_fee')); ?>

            <?php echo e(Form::text('reporte_fee', $detallesDePago->reporte_fee, ['class' => 'form-control' . ($errors->has('reporte_fee') ? ' is-invalid' : ''), 'placeholder' => 'Reporte Fee'])); ?>

            <?php echo $errors->first('reporte_fee', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('pago_inicial')); ?>

            <?php echo e(Form::text('pago_inicial', $detallesDePago->pago_inicial, ['class' => 'form-control' . ($errors->has('pago_inicial') ? ' is-invalid' : ''), 'placeholder' => 'Pago Inicial'])); ?>

            <?php echo $errors->first('pago_inicial', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('pendiente_de_pago')); ?>

            <?php echo e(Form::text('pendiente_de_pago', $detallesDePago->pendiente_de_pago, ['class' => 'form-control' . ($errors->has('pendiente_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Pendiente De Pago'])); ?>

            <?php echo $errors->first('pendiente_de_pago', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_limite')); ?>

            <?php echo e(Form::text('fecha_limite', $detallesDePago->fecha_limite, ['class' => 'form-control' . ($errors->has('fecha_limite') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Limite'])); ?>

            <?php echo $errors->first('fecha_limite', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_de_pago')); ?>

            <?php echo e(Form::text('fecha_de_pago', $detallesDePago->fecha_de_pago, ['class' => 'form-control' . ($errors->has('fecha_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Pago'])); ?>

            <?php echo $errors->first('fecha_de_pago', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('cantidad')); ?>

            <?php echo e(Form::text('cantidad', $detallesDePago->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad'])); ?>

            <?php echo $errors->first('cantidad', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('concepto')); ?>

            <?php echo e(Form::text('concepto', $detallesDePago->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto'])); ?>

            <?php echo $errors->first('concepto', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('status_de_pago')); ?>

            <?php echo e(Form::text('status_de_pago', $detallesDePago->status_de_pago, ['class' => 'form-control' . ($errors->has('status_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Status De Pago'])); ?>

            <?php echo $errors->first('status_de_pago', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('pago_asignado')); ?>

            <?php echo e(Form::text('pago_asignado', $detallesDePago->pago_asignado, ['class' => 'form-control' . ($errors->has('pago_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Pago Asignado'])); ?>

            <?php echo $errors->first('pago_asignado', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('num_aprovacion')); ?>

            <?php echo e(Form::text('num_aprovacion', $detallesDePago->num_aprovacion, ['class' => 'form-control' . ($errors->has('num_aprovacion') ? ' is-invalid' : ''), 'placeholder' => 'Num Aprovacion'])); ?>

            <?php echo $errors->first('num_aprovacion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nota')); ?>

            <?php echo e(Form::text('nota', $detallesDePago->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota'])); ?>

            <?php echo $errors->first('nota', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('comprovante')); ?>

            <?php echo e(Form::text('comprovante', $detallesDePago->comprovante, ['class' => 'form-control' . ($errors->has('comprovante') ? ' is-invalid' : ''), 'placeholder' => 'Comprovante'])); ?>

            <?php echo $errors->first('comprovante', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('forma_de_pago')); ?>

            <?php echo e(Form::text('forma_de_pago', $detallesDePago->forma_de_pago, ['class' => 'form-control' . ($errors->has('forma_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Forma De Pago'])); ?>

            <?php echo $errors->first('forma_de_pago', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('worksheet_id')); ?>

            <?php echo e(Form::text('worksheet_id', $detallesDePago->worksheet_id, ['class' => 'form-control' . ($errors->has('worksheet_id') ? ' is-invalid' : ''), 'placeholder' => 'Worksheet Id'])); ?>

            <?php echo $errors->first('worksheet_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/detalles-de-pago/form.blade.php ENDPATH**/ ?>