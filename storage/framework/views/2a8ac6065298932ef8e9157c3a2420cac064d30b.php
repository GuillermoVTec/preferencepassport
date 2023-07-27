

<?php $__env->startSection('template_title'); ?>
    Update User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  
        
           

        <div class="">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary"  href="<?php echo e(route('users.index')); ?>"><i class="fa fa-fw fa-edit"></i> Regresar</a></small></h5>
                    </div>
                    <div class="card-body">
                        
                        <form method="POST"  action="<?php echo e(route('users.update', $user->id)); ?>" role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                          <?php echo $__env->make('user.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          
                              <br> </br>
                          </form>
                         
                        </div>
     
                    </div>
                </div>
               
            </div>
        </div>
        
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/user/edit.blade.php ENDPATH**/ ?>