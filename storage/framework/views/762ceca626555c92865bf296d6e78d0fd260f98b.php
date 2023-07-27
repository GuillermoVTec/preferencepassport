

<?php $__env->startSection('content'); ?>


                 <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Agregar Distribuidor</h4>

                <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                   
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
    

                <div class="card-body">
                     <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                <div>
                    <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Regresar</a></small></h5>
                 <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                          name="avatar2"                        />

                        <div class="button-wrapper">

                          <label for="avatarFile" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Foto de Perfil</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              

                              type="file"
                              id="avatarFile"
                              name="avatar"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>

                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Restaurar</span>
                          </button>

                          <p class="text-muted mb-0">Acepta JPG, GIF or PNG. Tamaño Max. 800K</p>
                        </div>
                      </div>
                    </div> 
                 </div>
                  <hr class="my-0">
                    <div class="card-body">

                        <div class="row">
                            
                        <div class="mb-3 col-md-6">
                                      <?php echo e(Form::label('Razon social')); ?>

                                      <?php echo e(Form::text('razonsocial', '', ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), ])); ?>

                                      <?php echo $errors->first('razonsocial', '<div class="invalid-feedback">El campo Razon Social es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-6">
                                     <?php echo e(Form::label('Representante')); ?>

                                     <?php echo e(Form::text('representantelegal', '', ['class' => 'form-control' . ($errors->has('representantelegal') ? ' is-invalid' : ''), ])); ?>

                                     <?php echo $errors->first('representantelegal', '<div class="invalid-feedback">El campo Representante Legal es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-6">
                                      <?php echo e(Form::label('Rfc')); ?>

                                      <?php echo e(Form::text('rfc', '', ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), ])); ?>

                                      <?php echo $errors->first('rfc', '<div class="invalid-feedback">El campo RFC es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-6">
                                      <?php echo e(Form::label('Direccion')); ?>

                                      <?php echo e(Form::text('direccion', '', ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), ])); ?>

                                      <?php echo $errors->first('direccion', '<div class="invalid-feedback">El campo Direccion es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-4">
                                     <?php echo e(Form::label('Ciudad')); ?>

                                     <?php echo e(Form::text('ciudad', '', ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''),  ])); ?>

                                     <?php echo $errors->first('ciudad', '<div class="invalid-feedback">El campo Ciudad es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-4">
                                    <?php echo e(Form::label('Pais')); ?>

                                    <?php echo e(Form::text('pais', '', ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), ])); ?>

                                    <?php echo $errors->first('pais', '<div class="invalid-feedback">El campo Pais es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-4">
                                    <?php echo e(Form::label('Codigo postal')); ?>

                                    <?php echo e(Form::text('cp', '', ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), ])); ?>

                                    <?php echo $errors->first('cp', '<div class="invalid-feedback">El campo Codigo Postal es obligatorio.</div>'); ?>

                        </div>


                        <div class="mb-3 col-md-4">
                                     <?php echo e(Form::label('Telefono')); ?>

                                     <?php echo e(Form::text('telefono', '', ['class' => 'form-control' . ($errors->      has('telefono') ? ' is-invalid' : ''), ])); ?>

                                    <?php echo $errors->first('telefono', '<div class="invalid-feedback">El campo Telefono es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-4">
                                    <?php echo e(Form::label('Fecha de inicio de Contrato')); ?>

                                    <?php echo e(Form::date('date', '', ['class' => 'form-control' . ($errors->has('date') ? '       is-invalid' : ''), 'placeholder' => 'Date','id'=>"html5-date-input"])); ?>

                                    <?php echo $errors->first('date', '<div class="invalid-feedback">El campo Fecha es obligatorio.</div>'); ?>

                        </div>
                        <div class="mb-3 col-md-4">
                                    <?php echo e(Form::label('Matricula')); ?>

                                    <?php echo e(Form::text('matriculaid', '', ['class' => 'form-control' . ($errors->has('matriculaid') ? ' is-invalid' : ''), ])); ?>

                                    <?php echo $errors->first('matriculaid', '<div class="invalid-feedback">El campo Matricula es obligatorio.</div>'); ?>

                        </div>
                        </div>
                        <hr class="my-0" />
                        
                        <h5 class="card-header">Accesos</h5>
                         <div class="row">
                        <div class="mb-3 col-md-6">
                                <label ><?php echo e(__('Nombre De Usuario')); ?></label>
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>"  autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" >
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                        </div>
                        <div class="mb-3 col-md-6">
                            <label ><?php echo e(__('Correo Electronico')); ?></label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>"  autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" >
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3 col-md-4">
                            
                        <div class=" form-password-toggle   form-password-toggle">
                            <label for="password"><?php echo e(__('Password')); ?></label>
                            <div class="input-group input-group-merge">

                          <input
                            id="password"
                            type="password"
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="basic-default-password-confirm"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password"
                            name="password"
                            autocomplete="new-password"
                            
                          />

                            <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" >
                                       <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        </div>


                         <div class="mb-3 col-md-4">
                            
                        <div class=" form-password-toggle   form-password-toggle">
                            <label    for="basic-default-password-confirm" ><?php echo e(__('Confirm Password')); ?></label>
                            <div class="input-group input-group-merge">

                          <input
                            type="password"
                            class="form-control"
                            id="basic-default-password-confirm"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password"
                            name="password_confirmation"

                          />
                            <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                            
                            </div>
                        </div>
                         </div>
                        

                        <div class="mb-3 col-md-4 ">
                        <label >Rol:</label>
                    
                        <select name='roles' class="form-select" id="exampleFormControlSelect1">
                        
                        <option value="Distribuidor">Distribuidor</option>
                        
                        </select>
                        
                       
                         </div>
                       
                            <div class="mt-2">
                                <button type="submit"  class="btn btn-primary me-2">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                                <a type="reset" href="<?php echo e(route('home')); ?>" class="btn btn-outline-secondary">Cancelar </a>
                                 
                        
                          

                         

                    </form>
                                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
          
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/soaonjvfyv03/public_html/prueba/preferencepassport/resources/views/auth/register2.blade.php ENDPATH**/ ?>