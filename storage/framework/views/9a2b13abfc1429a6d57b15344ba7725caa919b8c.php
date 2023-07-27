

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="row justify-content-center">
        
        <div class="col-md-8">
                                 <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> Agregar nuevo usuario</h4>
            <div class="card">
                     <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                <div class="card-header"></div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Avatar')); ?></label>
                <div class="col-md-6">
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
                  <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Nombre')); ?></label>

                            <div class="col-md-6">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                        </div>
                         </div>

                        <div class="row mb-3">

                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Correo Electronico')); ?></label>

                            <div class="col-md-6">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="basic-default-password" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Password')); ?></label>
                            <div class=" form-password-toggle  col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                            <input
                            id="password"
                            type="password"
                            for="basic-default-password"
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
                            
                            autocomplete="new-password"/>
                                                        <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        
                        


                            </div>

                        </div>

                         <div class="row mb-3">
                            <label   class="col-md-4 col-form-label text-md-end" for="basic-default-password-confirm" ><?php echo e(__('Confirm Password')); ?></label>
                        <div class=" form-password-toggle  col-md-6 form-password-toggle">
                            
                            <div class="input-group input-group-merge">

                          <input
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
                            name="password_confirmation"

                          />
                            <span class="input-group-text cursor-pointer" id="basic-default-password"
                            ><i class="bx bx-hide"></i
                          ></span>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        </div>

                        <div class="row mb-3 ">
                        <label class="col-md-4 col-form-label text-md-end">Rol:</label>
                        <div class="col-md-6">
                        <select name='roles' id="roles" class="form-select <?php $__errorArgs = ['roles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1">
                        
                        <option tipe="hidden" value="<?php echo e(old('roles')); ?>"><?php echo e(old('roles')); ?> </option>
                        <option value="Administrador">Administrador</option>
                        <option value="Ventas">Ventas</option>
                        <option value="Verificacion">Verificacion</option>
                        <option value="Reservaciones">Reservaciones</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Gerente Ventas">Gerente Ventas</option>
                        </select>
                                 <?php $__errorArgs = ['roles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('Selecione un rol'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                                <a type="reset" href="<?php echo e(route('home')); ?>" class="btn btn-outline-secondary">Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/auth/register.blade.php ENDPATH**/ ?>