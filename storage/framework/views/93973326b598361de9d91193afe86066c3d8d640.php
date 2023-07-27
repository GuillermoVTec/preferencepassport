

<?php $__env->startSection('template_title'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
        <div class="">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Distribuidor')): ?>
                             <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="<?php echo e(route('indexDist')); ?>">Regresar</a></small></h5>
                            <?php else: ?>
                            
                            <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="<?php echo e(route('indexAdmin')); ?>">Regresar</a></small></h5>
                            <?php endif; ?>
                        <span class="card-title">Update Lead</span>
                        
                    </div>
                    
                    <div class="card-body">
                        
                        <form method="POST" action="<?php echo e(route('lead.update', $lead->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('lead.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="fw-bold py-3 mb-4">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a type="reset" href="<?php echo e(route('home')); ?>" class="btn btn-outline-secondary">Cancelar </a>
                             </div>
                        </form>
                  </div>
     
                    </div>
                </div>
               
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/edit.blade.php ENDPATH**/ ?>