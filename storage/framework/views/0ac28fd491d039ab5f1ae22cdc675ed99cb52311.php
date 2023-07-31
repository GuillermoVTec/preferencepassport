

<?php $__env->startSection('template_title'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section>
            <div class="col-md-12">                                  
                                 <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Registrar Tarjeta</h4>
                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card card-default">
                    <div class="card-header">
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-info"  href="<?php echo e(route('home')); ?>">Regresar</a></small></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('leads.store')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo $__env->make('lead.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="fw-bold py-3 mb-4">
                                <button type="submit" class="btn btn-info">Guardar</button>
                                <a type="reset" href="<?php echo e(route('home')); ?>" class="btn btn-outline-secondary">Cancelar </a>
                             </div>
                        </form>
                     </div>
               </div>
            </div>
       </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preferencepassport\resources\views/lead/create.blade.php ENDPATH**/ ?>