<?php $__env->startSection('template_title'); ?>
    Lead Adminnn
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                <?php if($res === 'abiertas'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Abiertas</h4>
                <?php endif; ?>
                <?php if($res === 'datospendientes'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Documentos Pendientes</h4>
                <?php endif; ?>
                <?php if($res === 'suspendida'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Suspendida</h4>
                <?php endif; ?>
                <?php if($res === 'rechazadaporelhotel'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Rechazada por el Hotel</h4>
                <?php endif; ?>
                 <?php if($res === 'cancelada'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Cancelada</h4>
                <?php endif; ?>
                <?php if($res === 'solicitada'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Solicitada</h4>
                <?php endif; ?>
                <?php if($res === 'pagodefeependiente'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Pago de Fee Pendiente</h4>
                <?php endif; ?>
                <?php if($res === 'pre'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Pre Confirmada</h4>
                <?php endif; ?>
                <?php if($res === 'confirmada'): ?>
                <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-credit-card me-1"></i> Confirmada</h4>
                <?php endif; ?>
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
                                        <th>✏️ ID</th>
                                        <th>✏️ Matriculasss</th>
                                        
										<th>👨🏻‍💻 Vendedor</th>
										<th>👨🏻‍💻 Nombre</th>
										<th>Edad</th>
										
										<th>📱 Telefono</th>
										
										<th>✉️ Correo</th>
										<th>🌐 País</th>
                                        <th>🌐 Fecha</th>
                                        <th>🌐 Estado</th>
                                       
										
						

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
                                            	<?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									            <?php if($lead->id_vendedor == $usuarios->id): ?>
							                    <td><?php echo e($usuarios->name); ?></td>
                                                <?php endif; ?>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                         <?php if($lead->id_vendedor == null): ?>
							                    <td><?php echo e('No asignado'); ?></td>
                                        <?php endif; ?>
                                       
											<td><?php echo e($lead->nombre); ?></td>
											<td><?php echo e($lead->edad); ?></td>
											
											<td><?php echo e($lead->telefono1); ?></td>
											
											<td><?php echo e($lead->correo); ?></td>
											<td><?php echo e($lead->pais); ?></td>
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
                                                    
                                                  
                                                    <a class="dropdown-item" href="<?php echo e(route('worksheet',$lead->id)); ?>"><i class="bx bx-show-alt me-1"></i> worksheet</a>
                                                    

                                                    
                                                   
                                                    
                                           
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/reservaciones.blade.php ENDPATH**/ ?>