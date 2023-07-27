

<?php $__env->startSection('template_title'); ?>
    <?php echo e($distribuidore->name ?? 'Show Distribuidore'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section >

        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="col-xl">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ID: <?php echo e($distribuidore->matriculaid); ?></h5>


                                               <div class="float-left">
                            <a class="btn btn-primary" href="<?php echo e(route('distribuidores.index')); ?>"> Regresar</a>
                        
                        </div>
                    </div><hr>
                        

                        </div>
                        
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Distribuidore</span>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                             <div class="mb-3 col-md-2">
                            <label  class="form-label">Razonsocial:</label>
                            <p><b><?php echo e($distribuidore->razonsocial); ?></b></p>
                         </div>
                                                <div class="mb-3 col-md-2">
                            <label  class="form-label">Representantelegal:</label>
                            <p><b><?php echo e($distribuidore->representantelegal); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">RFC:</label>
                            <p><b> <?php echo e($distribuidore->rfc); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Direccion::</label>
                            <p><b>  <?php echo e($distribuidore->direccion); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Ciudad:</label>
                            <p><b><?php echo e($distribuidore->ciudad); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Pais:</label>
                            <p><b><?php echo e($distribuidore->pais); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Codigo postal:</label>
                            <p><b> <?php echo e($distribuidore->cp); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Correo:</label>
                            <p><b><?php echo e($distribuidore->correo); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono:</label>
                            <p><b><?php echo e($distribuidore->telefono); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Date:</label>
                            <p><b><?php echo e($distribuidore->date); ?></b></p>
                         </div>
                                                 <div class="mb-3 col-md-2">
                            <label  class="form-label">Matriculaid:</label>
                            <p><b><?php echo e($distribuidore->matriculaid); ?></b></p>
                         </div>

                 




                    </div>
                </div>
            </div>
             </div>
              </div>
               </div>
       
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/distribuidore/show.blade.php ENDPATH**/ ?>