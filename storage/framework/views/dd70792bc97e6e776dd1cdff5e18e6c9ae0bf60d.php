<?php $__env->startSection('template_title'); ?>
    <?php echo e($worksheet->name ?? 'Show Worksheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Worksheet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('worksheet.index')); ?>"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            <?php echo e($worksheet->calificacion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Booking:</strong>
                            <?php echo e($worksheet->booking); ?>

                        </div>
                        <div class="form-group">
                            <strong>Ocupaciont:</strong>
                            <?php echo e($worksheet->ocupaciont); ?>

                        </div>
                        <div class="form-group">
                            <strong>Nombrec:</strong>
                            <?php echo e($worksheet->nombrec); ?>

                        </div>
                        <div class="form-group">
                            <strong>Edadc:</strong>
                            <?php echo e($worksheet->edadc); ?>

                        </div>
                        <div class="form-group">
                            <strong>Ocupácionc:</strong>
                            <?php echo e($worksheet->ocupácionc); ?>

                        </div>
                        <div class="form-group">
                            <strong>Estadocivilc:</strong>
                            <?php echo e($worksheet->estadocivilc); ?>

                        </div>
                        <div class="form-group">
                            <strong>Ingresos:</strong>
                            <?php echo e($worksheet->ingresos); ?>

                        </div>
                        <div class="form-group">
                            <strong>Tarjetas:</strong>
                            <?php echo e($worksheet->tarjetas); ?>

                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            <?php echo e($worksheet->ciudad); ?>

                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            <?php echo e($worksheet->cp); ?>

                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            <?php echo e($worksheet->plataforma); ?>

                        </div>
                        <div class="form-group">
                            <strong>Localizador:</strong>
                            <?php echo e($worksheet->localizador); ?>

                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            <?php echo e($worksheet->moneda); ?>

                        </div>
                        <div class="form-group">
                            <strong>Leads Id:</strong>
                            <?php echo e($worksheet->leads_id); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/worksheet/show.blade.php ENDPATH**/ ?>