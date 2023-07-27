



<?php $__env->startSection('template_title'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-bx bx-detail me-1"></i> Informacion lead</h4>
            
              <!-- Basic Layout -->
              <div class="row">

                <div class="col-xl">

                  <div class="card mb-4">
                     <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">ID: <?php echo e($lead->id_lead); ?></h5>
                      <?php if(isset($user->distribuidore->matriculaid)): ?>
                      <small class="text-muted float-end">Matricula Dist.<h6 class="mb-0"><?php echo e($user->distribuidore->matriculaid); ?></h6></small>
                      
                      <?php endif; ?>
                      
                       <small class="text-muted float-end"> 
                       <div class="float-right">
                           
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Distribuidor')): ?>
                            <a class="btn btn-primary" href="<?php echo e(route('indexDist')); ?>"> Regresar</a>
                            <?php endif; ?>

 
                        </div>
                        </small>
                    </div><hr>
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">           
                      </form>
                    </div>



                    <div class="card-body">
                        <div class="row">

                        <div class="mb-3 col-md-3">
                            <label class="form-label">Nombre Completo:</label>
                            <p><b><?php echo e($lead->nombre); ?></b></p>
                          </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Edad:</label>
                            <p><b><?php echo e($lead->edad); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Estado Civil:</label>
                            <p><b><?php echo e($lead->estadocivil); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono 1:</label>
                            <p><b><?php echo e($lead->telefono1); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label  class="form-label">Telefono 2:</label>
                            <p><b><?php echo e($lead->telefono2); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label class="form-label">Correo Electronico:</label>
                            <p><b><?php echo e($lead->correo); ?></b></p>
                             </div>
                           <div class="mb-3 col-md-2">
                            <label class="form-label">País:</label>
                            <p><b><?php echo e($lead->pais); ?></b></p>
                          </div>
                                                        <div class="mb-3 col-md-2">
                            <label class="form-label">Nota De Distribudor:</label>
                            <p><b><?php echo e($lead->notal); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                            <label class="form-label">Fecha de Registro:</label>
                            <p><b><?php echo e(date('d-m-Y h:i:s', strtotime($lead->created_at))); ?></b></p>
                          </div>
              </div>
            
            
     </div>
 </div>
  </div>
   </div>
    </div>
     </div>
  
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/showd.blade.php ENDPATH**/ ?>