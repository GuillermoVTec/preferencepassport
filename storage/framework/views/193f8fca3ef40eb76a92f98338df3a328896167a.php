

<?php $__env->startSection('template_title'); ?>
    Lead Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Lista general de leads</h4>
                <div class="card">

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                   <form >
                    <div class="card-body">
                                        
                  <div class="row gx-3 gy-2 align-items-center">
                       
                    <div class="col-md-2">
                      <label  class="form-label" for="selectTypeOpt">Desde:</label>
                     
                      <input v class="form-control m"name="fecha1"type="date" >
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="selectPlacement">Hasta:</label>
                     
                      <input  class="form-control "name="fecha2"type="date" >
                    </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <button id="showToastPlacement" class="btn btn-outline-primary d-block">Buscar</button>
                    </div>

                  
                  
                             <?php echo csrf_field(); ?>
                        <div class="col-md-2">
                         <label class="form-label" for="selectPlacement">Buscar por nombre:</label>
                         <input class="form-control d-block" type="search"  name="busqueda"  placeholder="Buscar en mis leads" aria-label="Search" />
                        </div>
                         <div class="col-md-1">
                         <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button class="btn btn-outline-primary d-block" type="submit">Buscar</button>
                        </div>
                        <div class="col-md-1">
                        <label class="form-label" for="showToastPlacement">&nbsp;</label>
                         <button type="submit" class="btn btn-icon btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                        </div>
                    <div class="col-md-2">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Regresar</a></small></h5>
                    </div>
                    

                  </form>
                   


                  </div>
                </div>
                    
                        
                         <small class="text-muted float-end">

                 </small>
                </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>✏️Matricula</th>
										
										<th>👨🏻‍💻Nombre</th>
										<th>Edad</th>
										<th>📱Telefono</th>
										<th>✉️Correo</th>
										<th>🌐País</th>
                                        <th>💳Tarjeta</th>
                                        <th>🌐Idioma</th>
                                        <th>🌐Fecha</th>
                                        <th>Estado</th>
                                       
										
						

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                               
                                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                           <td><?php echo e($lead->id); ?></td>
                                            <?php if(isset($lead->User->distribuidore->matriculaid)): ?>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong><?php echo e($lead->User->distribuidore->matriculaid.$lead->User->distribuidore->id); ?></strong></td>
                                                                
                                            <?php else: ?>
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong><?php echo e('VC'.$lead->User->id); ?></strong></td>
                                            <?php endif; ?>
                                        <?php if($lead->id_vendedor =0): ?>
                                            	<?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									            <?php if($lead->id_vendedor == $usuarios->id): ?>
							                    <td><?php echo e($usuarios->name); ?></td>
                                                <?php endif; ?>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                         <?php if($lead->id_vendedor == 10): ?>
							                    <td><?php echo e('No asignado'); ?></td>
                                        <?php endif; ?>
                                       
											<td><?php echo e($lead->nombre); ?></td>
											<td><?php echo e($lead->edad); ?></td>
											
											<td><?php echo e($lead->telefono1); ?></td>
											
											<td><?php echo e($lead->correo); ?></td>
											<td><?php echo e($lead->pais); ?></td>
                                            <td><?php echo e($lead->tarjeta); ?></td>
                                            <td><?php echo e($lead->idioma); ?></td>
                                            <td><?php echo e($lead->created_at->format('d-m-Y')); ?></td>
                                            

                                                 <?php if($lead->statuses_id == '1'): ?>
                                            <td ><span class=" badge bg-label-warning me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '2'): ?>
                                            <td><span class="badge bg-label-info me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </font></td>
                                                <?php elseif($lead->statuses_id == '3'): ?>
                                            <td> <span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '4'): ?>
                                            <td><span class="badge bg-label-danger me-1 "><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '5'): ?>
                                            <td> <span class=" badge bg-label-success me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '6'): ?>
                                            <td> <span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '7'): ?>
                                            <td> <span class="badge bg-label-secondary me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '8'): ?>
                                            <td ><span class=" badge bg-label-warning me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '9'): ?>
                                            <td><span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </font></td>
                                                <?php elseif($lead->statuses_id == '10'): ?>
                                            <td> <span class="badge bg-label-success me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '11'): ?>
                                            <td><span class="badge bg-label-danger me-1 "><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                <?php elseif($lead->statuses_id == '12'): ?>
                                            <td> <span class=" badge bg-label-success me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '13'): ?>
                                            <td> <span class=" badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '14'): ?>
                                            <td> <span class=" badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '15'): ?>
                                            <td> <span class=" badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '16'): ?>
                                            <td> <span class=" badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '17'): ?>
                                            <td> <span class=" badge bg-label-warning me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '18'): ?>
                                            <td> <span class=" badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '19'): ?>
                                            <td> <span class=" badge bg-label-secondary me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php elseif($lead->statuses_id == '20'): ?>
                                            <td> <span class=" badge bg-label-info me-1"><?php echo e($lead->statuses->nombre); ?> </span>  </td>
                                                <?php else: ?>
                                            <td> <span class="badge bg-label-warning me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                 <?php endif; ?>
										

                                            <td>
                                                <div >
                                                 <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                 <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                <form action="<?php echo e(route('lead.destroy',$lead->id)); ?>" method="POST">
                                                    
                                            
                                                   
                                                    <?php if($lead->statuses->id === 8 
                                                    or $lead->statuses->id === 7
                                                    or $lead->statuses->id === 9 
                                                    or $lead->statuses->id === 10 
                                                    or $lead->statuses->id === 11
                                                    or $lead->statuses->id === 12
                                                    or $lead->statuses->id === 13 
                                                    or $lead->statuses->id === 14 
                                                    or $lead->statuses->id === 15 
                                                    or $lead->statuses->id === 16 
                                                    or $lead->statuses->id === 17
                                                    or $lead->statuses->id === 18
                                                    or $lead->statuses->id === 19
                                                    or $lead->statuses->id === 20
                                                    or $lead->statuses->id === 21): ?>
                                                    
                                                    <a class="dropdown-item" href="<?php echo e(route('worksheet',$lead->id)); ?>"><i class="bx bx-show-alt me-1"></i> worksheet</a>
                                                    <?php endif; ?>
                                                    <?php if($lead->statuses->nombre === 'ACTIVAR' 
                                                    or $lead->statuses->nombre === 'NUEVA' 
                                                    or $lead->statuses->nombre === 'SEGUIMIENTO' 
                                                    or $lead->statuses->nombre === 'NO CONTESTO' 
                                                    or $lead->statuses->nombre === 'NO INTERESADO' 
                                                    or $lead->statuses->nombre ==='DATOS INCORRECTOS'): ?>
                                                    <a class="dropdown-item" href="<?php echo e(route('lead.show',$lead->id)); ?>"><i class="bx bx-show-alt me-1"></i> ver</a>
                                                    <?php endif; ?>
                                                    <a class="dropdown-item" href="<?php echo e(route('lead.edit',$lead->id)); ?>"><i class="bx bx-edit-alt me-1"></i> Editar </a>
                                                  
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit"class="dropdown-item"><i class="bx bx-trash me-1"></i>Eliminar </button>
                                                </form>
                                                 </div>
                                          </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                </tbody>
                            </table>
                            <?php echo e($leads->links()); ?>


                        </div>
                    </div>
                </div>
               
            </div>
        </div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preferencepassport\resources\views/lead/indexAdmin.blade.php ENDPATH**/ ?>