                                                                                                                                                                                                                                                                                   



<?php $__env->startSection('template_title'); ?>
    <?php echo e($lead->name ?? 'Ver Lead'); ?>

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
                      <h5 class="mb-0">ID: <?php echo e($lead->id); ?></h5>
                      <?php if(isset($user->distribuidore->matriculaid)): ?>
                      <small class="text-muted float-end">Matricula Dist.<h6 class="mb-0"><?php echo e($user->distribuidore->matriculaid); ?></h6></small>
                      
                      <?php endif; ?>
                      
                     
                      
                      
                      
                   
     
                    
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas|Gerente')): ?>
                 <form  method="POST" action="<?php echo e(route('lead.showUpdate',$lead->id)); ?>" enctype="multipart/form-data">    
                           
                            <?php echo csrf_field(); ?>
                      <small class="text-muted float-end">Estatus
                      <div class="input-group input-group-merge">
                      <select class="form-select form-select-sm" name="statuses_id" id="statuses_id">
                                <option value="<?php echo e($lead->statuses_id); ?>" > Seleccionar un estado</option> 
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                               
                    </select>

                         <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                       
                    <div data-i18n="Without menu"></div>
                    
                        </div>
                      </small>
                     </form>
                       <?php endif; ?>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Ventas')): ?>
                 <form  method="POST" action="<?php echo e(route('lead.showUpdate',$lead->id)); ?>" enctype="multipart/form-data">    
                           
                            <?php echo csrf_field(); ?>
                      <small class="text-muted float-end">Estatus
                      <div class="input-group input-group-merge">
                      <select class="form-select form-select-sm" name="statuses_id" id="statuses_id">
                                <option value="" > Seleccionar un estado</option> 
                                <option value="1" >NUEVA</option>
                                <option value="2">SEGUIMIENTO</option>
                                <option value="3">NO CONTESTO</option>
                                <option value="4">NO INTERESADO</option>
                                <option value="5">ACTIVADO</option>
                                <option value="6">DATOS INCORRECTOS</option>
                                <option value="7">PRE REGISTRO</option>
                               
                    </select>

                         <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                    <div data-i18n="Without menu"></div>
                    
                        </div>
                      </small>
                     </form>
                       <?php endif; ?>
                     <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas|Gerente')): ?>
                    <form action="<?php echo e(route('lead.showUpdate',$lead->id)); ?>" method="POST" enctype="multipart/form-data">    
                           
                            <?php echo csrf_field(); ?>
                      <small class="text-muted float-end">Cerrador
                      <div class="input-group input-group-merge">
                        <select id="cerrador_id" name="cerrador_id"  class="form-select form-select-sm">
                          <option value="" >Seleccionar un cerrador</option>
                          
                                <?php $__currentLoopData = $cerradores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cerrador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($cerrador->id); ?>"> <?php echo e($cerrador->name); ?> </option> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                        <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                        
                     </div>  
                     
                      </small>
                      
                     
                    <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control <?php $__errorArgs = ['statuses_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="statuses_id" value="<?php echo e($lead->statuses_id); ?>" hidden  autocomplete="statuses_id"  placeholder = 'statuses_id'>
                      </form>
                       <?php endif; ?>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Ventas')): ?>
                    <form action="<?php echo e(route('lead.showUpdate',$lead->id)); ?>" method="POST" enctype="multipart/form-data">    
                           
                            <?php echo csrf_field(); ?>
                      <small class="text-muted float-end">Cerrador
                      <div class="input-group input-group-merge">
                        <select id="cerrador_id" name="cerrador_id"  class="form-select form-select-sm">
                          <option value="<?php echo e($lead->cerrador_id); ?>" >Seleccionar un cerrador</option>
                          
                                <?php $__currentLoopData = $cerradores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cerrador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($cerrador->id); ?>"> <?php echo e($cerrador->name); ?> </option> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button type="submit" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-save"></span>
                        </button>
                        <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control <?php $__errorArgs = ['statuses_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="statuses_id" value="<?php echo e($lead->statuses_id); ?>" hidden  autocomplete="statuses_id"  placeholder = 'statuses_id'>
                     </div>  
                     
                      </small>
                      
                     
                    
                      </form>
                       <?php endif; ?>
                       <small class="text-muted float-end"> 
                       <div class="float-right">
                           
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Distribuidor')): ?>
                            <a class="btn btn-primary" href="<?php echo e(route('indexDist')); ?>"> Regresar</a>
                            <?php endif; ?>
                             <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas')): ?>
                            <a class="btn btn-primary" href="<?php echo e(route('indexAdmin')); ?>"> Regresar</a>
                            <?php endif; ?>
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Ventas')): ?>
                          <?php if($lead->statuses_id == '1'): ?>
                           <a class="btn btn-primary" href="<?php echo e(route('nuevo')); ?>"> Regresar</a>
                          <?php elseif($lead->statuses_id == '2'): ?> 
                           <a class="btn btn-primary" href="<?php echo e(route('seguimiento')); ?>"> Regresar</a>
                          <?php elseif($lead->statuses_id == '3'): ?>
                           <a class="btn btn-primary" href="<?php echo e(route('nocontesto')); ?>"> Regresar</a>
                          <?php elseif($lead->statuses_id == '4'): ?>
                           <a class="btn btn-primary" href="<?php echo e(route('nointeresado')); ?>"> Regresar</a>
                          <?php elseif($lead->statuses_id == '5'): ?>
                           <a class="btn btn-primary" href="<?php echo e(route('activados')); ?>"> Regresar</a>
                          <?php elseif($lead->statuses_id == '6'): ?>
                           <a class="btn btn-primary" href="<?php echo e(route('datosincorrectos')); ?>"> Regresar</a>
                          <?php else: ?>
                           <a class="btn btn-primary" href="<?php echo e(route('preregistro')); ?>"> Regresar</a>
                          <?php endif; ?>
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
                         <?php if(isset($cerradors)): ?>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Nombre de cerrador:</label>
                                
                                          <p> <b><?php echo e($cerradors->name); ?></b></p> 
                               
                          </div>
                         <?php endif; ?> 
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas|Gerente')): ?>

                          
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver nota')): ?>
                          <form action="<?php echo e(route('lead.showStore',$lead->id)); ?>" method="POST">
                              
                              <?php echo csrf_field(); ?>
                        <div class="collapse" id="collapseExample">
                        <div class="d-grid d-sm-flex p-6 ">
                          <div class="input-group input-group-merge">
                                    <?php echo e(Form::textArea('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>2, "value" => "nota->nota"])); ?>

                            <button type="submit" class="btn btn-primary" >Guardar</button>
                           
                           
                         </div>
                        </div>
                      </div>
                         <div class="form-group">
            
                                  <?php echo e(Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"hidden" ,"readonly","value" => "lead->id"])); ?>

                                  <?php echo $errors->first('leads_id', '<div class="invalid-feedback">:message</div>'); ?>

                         </div>
                          <div class="form-group">
            
                                    <?php echo e(Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"])); ?>

                                    <?php echo $errors->first('user', '<div class="invalid-feedback">:message</div>'); ?>

                         </div>
                      <p class="demo-inline-spacing">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                          Escribir Nota
                        </a>  
                      </p> 
                     </div> 
                      
                      
                      </div>  
                       </form>
                    <?php endif; ?>
                        <?php endif; ?>
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas|Gerente|Ventas')): ?>

                          <div class="mb-3 col-md-2">
                            <label class="form-label">Usuario:</label>
                            <p><b><?php echo e($lead->user->name); ?></b></p>
                          </div>
                          <div class="mb-3 col-md-2">
                              <label class="form-label">Estado:</label>
                                                <?php if($lead->statuses_id == '1'): ?>
                                          <p><b>  <span class="badge bg-label-warning me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></b></p>
                                                <?php elseif($lead->statuses_id == '2'): ?>
                                          <p><b><span class="badge bg-label-info me-1 "><?php echo e($lead->statuses->nombre); ?> </span> </font></b></p>
                                                <?php elseif($lead->statuses_id == '3'): ?>
                                          <p><b><span class="badge bg-label-danger me-1 "><?php echo e($lead->statuses->nombre); ?> </span> </font></b></p>
                                                <?php elseif($lead->statuses_id == '4'): ?>
                                          <p><b><span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span> </font></b></p>
                                                <?php elseif($lead->statuses_id == '5'): ?>
                                           <p><b><span class="badge bg-label-success me-1 "><?php echo e($lead->statuses->nombre); ?> </span></b></p>
                                                <?php elseif($lead->statuses_id == '6'): ?>
                                            <p><b><span class="badge bg-label-danger me-1"><?php echo e($lead->statuses->nombre); ?> </span></b></p>
                                                <?php else: ?>
                                            <p><b><span class="badge bg-label-secondary me-1"><?php echo e($lead->statuses->nombre); ?> </span></b></p>
                                                 <?php endif; ?>  
                          
                        </div>
                        
                          <form action="<?php echo e(route('lead.showStore',$lead->id)); ?>" method="POST">
                              
                              <?php echo csrf_field(); ?>
                        <div class="collapse" id="collapseExample">
                        <div class="d-grid d-sm-flex p-6 ">
                          <div class="input-group input-group-merge">
                                    <?php echo e(Form::textArea('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>2, "value" => "nota->nota"])); ?>

                            <button type="submit" class="btn btn-primary" >Guardar</button>
                           
                           
                         </div>
                        </div>
                      </div>
                         <div class="form-group">
            
                                  <?php echo e(Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"hidden" ,"readonly","value" => "lead->id"])); ?>

                                  <?php echo $errors->first('leads_id', '<div class="invalid-feedback">:message</div>'); ?>

                         </div>
                          <div class="form-group">
            
                                    <?php echo e(Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"])); ?>

                                    <?php echo $errors->first('user', '<div class="invalid-feedback">:message</div>'); ?>

                         </div>
                      <p class="demo-inline-spacing">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample">
                          Escribir Nota
                        </a>  
                      </p> 
                     </div> 
                      
                      
                      </div>  
                       </form>
                  
                        <?php endif; ?>
                
              </div>
            
            
     </div>
 </div>
 

 
    
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente Ventas|Gerente|Ventas')): ?>      
           <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Nota')); ?>

                            </span>


                        </div>
                    </div>


                   
                    
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead >
                                    <tr>
                                        <th>Operador</th>
                                        <th>Nota</th>
                                        <th>Fecha de creacion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                         <td><?php echo e($nota->user); ?></td>
                                            <td style="max-width: 300px;"><?php echo e($nota->nota); ?></td>
                                            <td><?php echo e(date('d-m-Y h:i:s', strtotime($nota->created_at))); ?></td>
                                            <td>
                                            </td>
                                        </tr>   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>           
<?php endif; ?>

        
            
        
       

     
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/soaonjvfyv03/public_html/prueba/preferencepassport/resources/views/lead/show.blade.php ENDPATH**/ ?>