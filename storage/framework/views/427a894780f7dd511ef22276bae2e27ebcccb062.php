
           <select  name='idioma' class="form-select" >
               <option value="es" >es</option>
               <option value="us" >us</option>
           </select>
     
          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Nombre Completo</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nombre"  value="<?php echo e($lead->nombre); ?>"  autocomplete="nombre" autofocus placeholder = 'nombre completo'>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">El campo Nombre es obligatorio.</div>'); ?>

        </div>
        
        </div>
          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Edad</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-analyse'></i></span>
            <input   type="text" class="form-control <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="edad" id="age" maxlength="3" value="<?php echo e($lead->edad); ?>"  autocomplete="Edad" autofocus placeholder = 'Edad' onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            
            <?php echo $errors->first('edad', '<div class="invalid-feedback">El campo Edad es solo numerico obligatorio.</div>'); ?>

        </div>

        </div>

          <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-fullname">Estado civil</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-user-detail' ></i></span>
            <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text" class="form-control <?php $__errorArgs = ['estadocivil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="estadocivil"  value="<?php echo e($lead->estadocivil); ?>"  autocomplete="estadocivil"  placeholder = 'estado civil'>

            <?php echo $errors->first('estadocivil', '<div class="invalid-feedback">El campo Estado civil es obligatorio.</div>'); ?>

        </div>
        </div>
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-phone2">Teléfono 1</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone2" type="text" class="form-control <?php $__errorArgs = ['telefono1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="telefono1"  value="<?php echo e($lead->telefono1); ?>"  autocomplete="telefono1"  placeholder = 'Telefono obligatorio'>

            <?php echo $errors->first('telefono1', '<div class="invalid-feedback">El campo Estado Telefono  es obligatorio.</div>'); ?>

        </div>
        </div>
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-phone">Teléfono 2</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-phone" type="text" class="form-control <?php $__errorArgs = ['telefono2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="telefono2" value="<?php echo e($lead->telefono2); ?>"   autocomplete="telefono2"  placeholder = 'Telefono obligatorio'>
        <?php echo $errors->first('telefono2', '<div class="invalid-feedback">El campo Estado Telefono  es obligatorio.</div>'); ?>

            
        </div>
        </div>                          
        <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-email">Correo Electronico</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-email" type="text" class="form-control <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="correo"  value="<?php echo e($lead->correo); ?>"  autocomplete="correo" autofocus placeholder = 'Correo electronico'>
                <?php echo $errors->first('correo', '<div class="invalid-feedback">El campo Correo  es obligatorio en formato .+@globex\.com</div>'); ?>

            
        </div>
        </div>
                <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-company">País</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-globe"></i></span>
                
                <input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="text" class="form-control <?php $__errorArgs = ['pais'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pais"  value="<?php echo e($lead->pais); ?>"  autocomplete="pais" autofocus placeholder = 'Pais'>
                <?php echo $errors->first('correo', '<div class="invalid-feedback">El campo Correo  es obligatorio.</div>'); ?>

            
        </div>
        </div>
                <div class="form-group">
            
            <label class="form-label" for="basic-icon-default-company">Nota</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-globe"></i></span>
                <input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="text" class="form-control <?php $__errorArgs = ['notal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="notal"  value="<?php echo e($lead->notal); ?>"  autocomplete="notal" autofocus placeholder = 'nota'>
                <?php echo $errors->first('notal', '<div class="invalid-feedback">El campo no  es obligatorio.</div>'); ?>

            
        </div>
        </div>


<input id="basic-icon-default-company2" aria-describedby="basic-icon-default-email" type="hidden" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"  value="<?php echo e($password); ?>"  autocomplete="password" autofocus placeholder = 'Password'>
        
  

        <div class="form-group">
            
            <?php echo e(Form::text('user_id', $username, [ 'class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''),"readonly", "hidden" ,"value" => "username"])); ?>


            <?php echo $errors->first('user_id', '<div class="invalid-feedback">El campo Estado Usuario  es obligatorio.</div>'); ?>

        </div>
       
               <div class="form-group">
            
            <?php echo e(Form::text('created_at2', $date, [ 'class' => 'form-control' . ($errors->has('created_at2') ? ' is-invalid' : ''),"readonly", "hidden" ,"value" => "date"])); ?>

            <?php echo e(Form::text('user_name', $username2,  [ 'class' => 'form-control' . ($errors->has('user_name') ? ' is-invalid' : ''),"readonly","hidden" ,"value" => "username2", "name"=>"username2" ])); ?>

            <?php echo $errors->first('created_at2', '<div class="invalid-feedback">El campo Estado Fecha  es obligatorio.</div>'); ?>

        </div>
        <div class="form-group">
             
            <?php echo e(Form::label('status')); ?>

           
           
         <select  name='statuses_id' class="form-select" id="exampleFormControlSelect1">
               
                                 <?php if($action === 'edit'): ?>
                                 <option value="<?php echo e($lead->statuses_id); ?>" > Seleccionar nuevo status</option> 
                                <?php endif; ?>
                                 <option value="1" >NUEVA</option>
                                 <?php if($action === 'edit'): ?>
                                 <option value="2">SEGUIMIENTO</option>
                                 <option value="3">NO CONTESTO</option>
                                 <option value="4">NO INTERESADO</option>
                                 <option value="5">ACTIVADO</option>
                                 <option value="6">DATOS INCORRECTOS</option>
                                 <option value="7">PRE REGISTRO</option>
                                  <?php endif; ?>

        </select>
        <?php echo $errors->first('statuses_id', '<div class="invalid-feedback">:message</div>'); ?>

        <?php echo e(Form::label('Tarjeta')); ?>

        <select  name='tarjeta' class="form-select" id="exampleFormControlSelect1">
               

              <option value="Tarjeta Classic" >Tarjeta Classic</option>
              <option value="Tarjeta Gold" >Tarjeta Gold</option>
              <option value="Tarjeta Platinum" >Tarjeta Platinum</option>
              <option value="Tarjeta Black" >Tarjeta Black</option>
             


        </select>
       
        <?php echo $errors->first('tarjeta', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        
         <?php if(empty($nota)): ?>

         <?php else: ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver nota')): ?>
        
        <div class="form-group">
            <?php echo e(Form::label('Nota')); ?>

            <?php echo e(Form::textArea('nota', $nota->nota,   ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''),'rows'=>5, "value" => "nota->nota"  ])); ?>

            <?php echo $errors->first('nota', '<div class="invalid-feedback">El campo Estado Nota es opcional  es obligatorio.</div>'); ?>

        </div>
        <div class="form-group">
            
            <?php echo e(Form::text('leads_id', $nota->leads_id, ['class' => 'form-control' . ($errors->has('leads_id') ? ' is-invalid' : '') ,"readonly", "hidden","value" => "nota->leads_id"])); ?>

            <?php echo $errors->first('leads_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            
            <?php echo e(Form::text('user', $username2, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),"readonly", "hidden","value" => "username2"])); ?>

            
            <?php echo $errors->first('user', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

        <?php endif; ?>

        <?php endif; ?>



  


<?php /**PATH C:\xampp\htdocs\preferencepassport\resources\views/lead/form.blade.php ENDPATH**/ ?>