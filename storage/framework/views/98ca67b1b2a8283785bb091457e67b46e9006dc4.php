<?php $__env->startSection('template_title'); ?>
    Lead Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-bx bx-detail me-1"></i> Asignación lead</h4>

              <div class="row">
                <div class="col-xl">
                <div class="card mb-5">
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
                        <div class="col-sm-5">
                        <div class="demo-inline-spacing">
                        <small class="text-muted">Distribuidor
                        <select id="select2" name="matriculaid" aria-hidden="true"  class="form-select form-select-sm">

                            <option value=""> Todos </option>
                                <?php $__currentLoopData = $distribuidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distribuidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($distribuidor->id); ?>"> <?php echo e($distribuidor->name."-".$distribuidor->roles()->first()->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                       </small>
                       </div>
                       
                       <div class="col-sm-6">
                       <div class="demo-inline-spacing">
                        <small class="text-muted">Estado
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
                      
                    <form  method="get" action="<?php echo e(route('lead.asignar')); ?>" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                    <?php if($message = Session::get('danger')): ?>
                        <div class="alert alert-danger">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                     <div class="row gy-3">
                       <p style="margin-bottom: -10px !important;">Reasignar leads</p>
                        <div class="col-sm-3">
                          <div class="demo-inline-spacing">
                            <input class="form-control form-control-sm" name="nlead" id="nlead" placeholder="Numero de leads">
                            </input>
                            </div>
                            </div>
                    
                    <div class="col-sm-3">
                    <div class="demo-inline-spacing">
                        <select id="matriculaid" name="matriculaid"  class="form-select form-select-sm">
                        <option value=""> Seleccionar usario </option>
                                <?php $__currentLoopData = $distribuidores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distribuidor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($distribuidor->id); ?>"> <?php echo e($distribuidor->name."-".$distribuidor->roles()->first()->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        </div>
                        <div class="col-sm-3">
                         <div class="demo-inline-spacing">
                        <select id="statusb" name="statusb"  class="form-select form-select-sm">
                        <option value="">Selecione estado de los leads a asignar. </option>
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($statu->id); ?>"> <?php echo e($statu->nombre); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        </div>
                    <div class="col-sm-3">
                    <div class="demo-inline-spacing">
                        <div class="input-group input-group-merge">
                        <select id="Uventas" name="Uventas"  class="form-select form-select-sm">

                            <option value="">Selecione al vendedor. </option>
                                <?php $__currentLoopData = $usuariosConRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($usuarios->id); ?>"> <?php echo e($usuarios->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                            <button id="showToastPlacement" class="btn btn-sm btn-outline-primary d-block">Buscar</button>
                        </div>
                        </div>
                        
                  </form>
                  </div>
                  </div>


                </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>✏️ ID</th>

										<th>👨🏻‍💻 Nombre</th>
										<th>Edad</th>

										<th>📱 Telefono</th>

										<th>✉️ Correo</th>
										<th>🌐 País</th>
                                        <th>🌐 Fecha de creacion</th>
                                        <th>🌐 Estado</th>




                                       
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <?php if(isset($lead->User->distribuidore->matriculaid)): ?>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong><?php echo e('000'.$lead->User->distribuidore->matriculaid.$lead->User->distribuidore->id); ?></strong></td>

                                            <?php else: ?>
                                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong><?php echo e('000'.'VC'.$lead->User->id); ?></strong></td>
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
                                                <?php else: ?>
                                                <td> <span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></td>
                                                 <?php endif; ?>



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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/asignar.blade.php ENDPATH**/ ?>