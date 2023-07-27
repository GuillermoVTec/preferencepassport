

<?php $__env->startSection('template_title'); ?>
    Cerrador
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Lista general de cerradores</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                                   <form >
                    <div class="card-body">
                                        
                  <div class="row gx-3 gy-2 align-items-center">
                                                    <?php echo csrf_field(); ?>
                        <div class="col-md-2">
                         <label class="form-label" for="selectPlacement">Buscar por nombre:</label>
                         <input class="form-control d-block" type="search"  name="busqueda"  placeholder="Buscar en mis leads" aria-label="Search" />
                        </div>
                         <div class="col-md-1">
                         <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button class="btn btn-outline-primary d-block" type="submit">Buscar</button>
                         </div>
                         <div class="col-md-2">
                        <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button type="submit" class="btn btn-icon btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                        </div>


                    <div class="col-md-2">
                     
                     
                      
                    </div>
                    <div class="col-md-2">
                     
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Regresar</a></small></h5>
                    </div>
                 </div> 
                </div>   

                    

                  </form>
                   
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $__currentLoopData = $cerradors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cerrador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                             <td><?php echo e($cerrador->name); ?></td>
                                            

                                            <td>
                                             <div >
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                <form action="<?php echo e(route('cerradors.destroy',$cerrador->id)); ?>" method="POST">
                                                    
                                                    
                                                    <a class="dropdown-item" href="<?php echo e(route('cerradors.edit',$cerrador->id)); ?>"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    
                                                </form>
                                                 </div>
                                          </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
                <?php echo $cerradors->links(); ?>

            </div>
        </div>
    </div>
                 </div>
     
                    </div>
                
               
            
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/cerrador/index.blade.php ENDPATH**/ ?>