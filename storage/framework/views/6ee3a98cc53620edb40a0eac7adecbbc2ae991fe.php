

<?php $__env->startSection('template_title'); ?>
    User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  
<h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Lista de usuarios</h4>
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
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>Num</th>
                                        
										<th>Nombre</th>
										<th>Correo</th>
										<th>Rol</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" >
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($user->name); ?></td>
											
											<td><?php echo e($user->email); ?></td>
											<td><?php echo e($user->roles()->first()->name); ?></td>
											     <?php if($user->status == '0'): ?>
                                                <td> <span class="badge bg-label-danger me-1 "><?php echo e('Inactivo'); ?> </span>  </td>
                                                 <?php else: ?>
                                                <td> <span class=" badge bg-label-success me-1"><?php echo e('Activo'); ?> </span> </font></td>
                                                 <?php endif; ?>

                                            <td>
                                             <div >
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                <form action="<?php echo e(route('users.destroy',$user->id)); ?>" method="POST">
                                                    
                                                    
                                                    <a class="dropdown-item" href="<?php echo e(route('users.edit',$user->id)); ?>"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                    
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
                
                <?php echo $users->links(); ?>

            </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preferencepassport\resources\views/user/index.blade.php ENDPATH**/ ?>