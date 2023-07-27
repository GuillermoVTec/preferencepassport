



<?php $__env->startSection('template_title'); ?>
    Lead Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-bx bx-detail me-1"></i> Reasignación lead</h4>
     


<div class="row">
                <!-- Button with Badges -->
                <div class="col-lg">
                  <div class="card mb-4">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                     <form >
                       <?php echo csrf_field(); ?>
                    <div class="card-body">
                      <div class="row gy-3">
                       <p style="margin-bottom: -10px !important;">Consultar leads</p>
                        <div class="col-sm-4">
                          <div class="demo-inline-spacing">
                             <small class="text-muted">Selecione vendedor
                            <select id="vendedor" name="vendedor"  class="form-select form-select-sm">
                                          <option value=""> Todos </option>
                                           <?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($usuarios->id); ?>"<?php echo e(old('vendedor')); ?>> <?php echo e($usuarios->name); ?> </option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </small>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="demo-inline-spacing">
                            <small class="text-muted">Distribuidor
                            <select id="select2" name="matriculaid" aria-hidden="true"  class="form-select form-select-sm">
                                         <option value=""> Todos </option>
                                         <?php $__currentLoopData = $distribuidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distribuidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($distribuidor->User->id); ?>"> <?php echo e($distribuidor->matriculaid); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                         </small>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="demo-inline-spacing">
                            <small class="text-muted ">Estado
                            <div class="input-group input-group-merge">
                        <select id="status" name="status"  class="form-select form-select-sm">
                                          <option value=""> Todos </option>
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($statu->id); ?>"> <?php echo e($statu->nombre); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          <button id="showToastPlacement" class="btn btn-sm btn-outline-primary d-block">Buscar</button>
                        </div>
                         </small>
                          </div>
                        </div>
                        
                        <div class="col-sm-1">
                        <small class="text-muted ">&nbsp;
                         <button type="submit" class="btn btn-sm btn-outline-primary d-block"><span class="tf-icons bx bx-refresh"></span></button>
                         </small>
                        </div>
                        </form>
                        <hr >
                      </div>
                  <form  method="get" action="<?php echo e(route('lead.reAsignar')); ?>" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                    <?php if($message = Session::get('danger')): ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                      <div class="row gy-3">
                       <p style="margin-bottom: -10px !important;">Reasignar leads</p>
                        <div class="col-sm-4">
                          <div class="demo-inline-spacing">
                            <select id="Uventas2" name="Uventas2"  class="form-select form-select-sm">
                            <option value="">Selecione al vendedor. </option>
                                <?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($usuarios->id); ?>"> <?php echo e($usuarios->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                      <input class="form-control form-control-sm" name="nlead" id="nlead" placeholder="Numero de leads">
    
                               
                    </input>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="demo-inline-spacing">
                            <select id="matriculaid" name="matriculaid"  class="form-select form-select-sm">
                            <option value=""> Distribudor </option>
                                <?php $__currentLoopData = $distribuidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distribuidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($distribuidor->User->id); ?>"> <?php echo e($distribuidor->matriculaid); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <select id="statusb" name="statusb"  class="form-select form-select-sm">
                            <option value="">Selecione estado de los leads a asignar. </option>
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($statu->id); ?>"> <?php echo e($statu->nombre); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="demo-inline-spacing">
                            <div class="input-group input-group-merge">
                        <select id="Uventas" name="Uventas"  class="form-select form-select-sm">
                            <option value="">Selecione al vendedor. </option>
                                <?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($usuarios->id); ?>"> <?php echo e($usuarios->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                          <button id="showToastPlacement" class="btn btn-sm btn-outline-primary d-block">REASIGNAR</button>
                        </div>
                         </form>
                          </div>
                        </div>
                      </div>
                    </form>
                    </div>
                  
                
             
                
                    
                        
                         <small class="text-muted float-end">

                 </small>
                
                             
                
                </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>✏️ ID</th>
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
                                                <?php else: ?>
                                                <td> <span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                 <?php endif; ?>
										

                                            <td>
                                                <div >
                                                 <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                 <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                <form action="<?php echo e(route('lead.destroy',$lead->id)); ?>" method="POST">
                                                    <a class="dropdown-item" href="<?php echo e(route('lead.show',$lead->id)); ?>"><i class="bx bx-show-alt me-1"></i> Ver</a>
                                                    
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/reasignar.blade.php ENDPATH**/ ?>