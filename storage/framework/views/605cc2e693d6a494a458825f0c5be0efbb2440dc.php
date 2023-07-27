

<?php $__env->startSection('template_title'); ?>
    Create Cerrador
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section >
        <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Agregar cerrador</h4>
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('cerradors.store')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('cerrador.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/cerrador/create.blade.php ENDPATH**/ ?>