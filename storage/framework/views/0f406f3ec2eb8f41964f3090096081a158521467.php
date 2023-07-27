

<?php $__env->startSection('template_title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                  <?php if($worksheet->calificacion != 'NQ'): ?>
                  <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> WORKSHEET - Q</h4>
                  <?php endif; ?>
                  <?php if($worksheet->calificacion === 'NQ'): ?>
                  <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> WORKSHEET - NQ</h4>
                  <?php endif; ?>

<form method="POST" action="<?php echo e(route('worksheetUpdate', $lead->id)); ?>"  role="form" enctype="multipart/form-data">
  <?php echo e(method_field('PATCH')); ?>

  <?php echo csrf_field(); ?>
  <div class="">
    <div class="col-md-12">

      <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="card card-default">


        <div class="card-body">
          <?php if($message = Session::get('success')): ?>
          <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
          </div>
          <?php endif; ?>

          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y" >
              <h4 class="fw-bold py-3 mb-4"> <i ></i> </h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="">
                    <h5 class="card-header">Datos del cliente</h5>
                    <!-- Account -->

                    <hr class="my-0" />
                    <div class="card-body">

                      <div class="row">
                        <div class="mb-3 col-md-1">
                          <label class="form-label">ID LEAD:</label>
                          <input readonly class="form-control" type="text" name="leads_id" value="<?php echo e($lead->id); ?>" />

                        </div>
                        <div class="mb-3 col-md-1">
                          <label class="form-label">REGISTRO:</label>
                          <input readonly class="form-control" type="text" name="date" value="<?php echo e($date); ?>" />

                        </div>
                        <div class="mb-3 col-md-2">
                          <label class="form-label">VENDEDOR:</label>
                          <input readonly class="form-control" type="text" name="vendedor" value="<?php echo e(Auth::user()->name); ?>" />

                        </div>
                        <?php if($cerradores): ?>
                        <div class="mb-3 col-md-2">
                          <label class="form-label">Cerrador:</label>
                          <input readonly class="form-control" type="text" name="cerrador_id" value="<?php echo e($cerradores->name); ?>" />


                        </div>
                        <?php endif; ?>
                        <div class="mb-4 col-md-2">
                          <label class="form-label">STATUS:</label>
                          <div class="input-group input-group-merge">
                            <select class="form-select " name="statuses_id" id="statuses_id">
                              <option value="<?php echo e($lead->statuses_id); ?>" ><?php echo e($statuses->nombre); ?></option> 
                              
                               <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Reservaciones')): ?>
                              <option value="21" >Abiertas</option>
                              <option value="13" >Documentos Pendientes</option>
                              <option value="14" >Suspendida</option>
                              <option value="15" >Rechazada Por Hotel</option>
                              <option value="16" >Calcelada</option>
                              <option value="17" >Solicitada</option>
                              <option value="18" >Pago De Fee Pendiente</option>
                              <option value="19" >Pre Confirmada</option>
                              <option value="20" >Confirmada</option>
                              <?php endif; ?>
                              <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Verificacion')): ?>
                              <?php if($lead->statuses_id != 12): ?>
                              <option value="8" >Nueva</option>
                              <option value="9" >No Venta</option>
                              <option value="10" >Venta</option>
                              <option value="11" >Documentos Pendientes</option>
                              <option value="12" >Documentos Completos</option>
                              <?php endif; ?>
                              

                              <?php if($lead->statuses_id == 12): ?>
                             
                              <option value="13" >Confirmada</option>
                              <?php endif; ?>
                              <?php endif; ?>
                              <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Ventas')): ?>
                              <option value="8" >Verificacion</option>

                              <?php endif; ?>
                                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador')): ?>
                              <option value="13" >Documentos Pendientes</option>
                              <option value="14" >Suspendida</option>
                              <option value="15" >Rechazada Por Hotel</option>
                              <option value="16" >Calcelada</option>
                              <option value="17" >Solicitada</option>
                              <option value="18" >Pago De Fee Pendiente</option>
                              <option value="19" >Pre Confirmada</option>
                              <option value="20" >Confirmada</option>
                            
                              <option value="8" >Nueva</option>
                              <option value="9" >No Venta</option>
                              <option value="10" >Venta</option>
                              <option value="11" >Documentos Pendientes</option>
                              <option value="12" >Documentos Completos</option>
                              <?php endif; ?>

                            </select>



                          </button>



                        </div>
                      </small>
                      

                    </div>
                  </form>
                    <select hidden class="form-select" id="exampleFormControlSelect1" value="$worksheet->calificacion" name="calificacion">
                      <option value="<?php echo e($worksheet->calificacion); ?>"><?php echo e($worksheet->calificacion); ?></option>

                    </select>

                
                    <div class="mb-3 col-md-1">
                    <label class="form-label">CALIF:</label>
                    <select class="form-select" id="exampleFormControlSelect1" value="$worksheet->calificacion" name="calificacion">
                      <option value="<?php echo e($worksheet->calificacion); ?>"><?php echo e($worksheet->calificacion); ?></option>
                      <option selected value="Q">Q</option>
                      <option value="NQ">NQ</option>
                    </select>
                  </div>
              


                
                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">Plataforma</label>
                    <div class="input-group input-group-merge">
                      <input type="text" class="form-control" value="<?php echo e($worksheet->plataforma); ?>" name="plataforma"/>
                    </div>
                  </div>
                 

                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">booking</label>
                    <div class="input-group input-group-merge">



                      <input type="text" class="form-control" value="<?php echo e($worksheet->booking); ?>" name="booking"/>

                    </div>
                  </div>

                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">FECHA DE COMPRA:</label>
                    <div class="input-group input-group-merge">
                     <input class="form-control"  value="<?php echo e($worksheet->created_at); ?>" readonly id="html5-date-input" />
                   </div>
                 </div>
                 <div class="mb-3 col-md-2">
                   <label class="form-label" for="basic-icon-default-fullname">titular</label>
                   <div class="input-group input-group-merge">

                    <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nombre" value="<?php echo e($lead->nombre); ?>"  autocomplete="nombre"  placeholder = 'nombre completo'>

                    <?php echo $errors->first('nombre', '<div class="invalid-feedback">El campo Nombre es obligatorio.</div>'); ?>

                  </div>
                </div>

                <div class="mb-3 col-md-2">
                  <label class="form-label">Edad:</label>
                  <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="edad" value="<?php echo e($lead->edad); ?>"  autocomplete="edad"  placeholder = 'edad'>

                  <?php echo $errors->first('nombre', '<div class="invalid-feedback">El campo edad es obligatorio.</div>'); ?>


                </div>
                <div class="mb-3 col-md-3">
                  <label  class="form-label">OCUPACIÓN:</label>
                  <input class="form-control" type="text" value="<?php echo e($worksheet->ocupaciont); ?>" name="ocupaciont"  />
                </div>
                <div class="mb-3 col-md-2">
                  <label  class="form-label">ESTADO CIVIL:</label>
                  <select class="form-select" id="exampleFormControlSelect1" name="estadocivil">
                    <option selected  value="<?php echo e($lead->estadocivil); ?>"><?php echo e($lead->estadocivil); ?></option>
                    <option value="Casado (a)">Casado (a)</option>
                    <option value="Soltero">Soltero (a)</option>
                    <option value="Union Libre">Union Libre</option>
                    <option value="Viudo">Viudo (a)</option>
                  </select>
                </div>
                <?php if($worksheet->calificacion === 'Q'): ?>
                <div class="mb-3 col-md-5">
                  <label class="form-label">Cotitular:</label>
                  <input class="form-control" type="text" id="name" value="<?php echo e($worksheet->nombrec); ?>" name="nombrec"/>
                </div>
                <div class="mb-3 col-md-2">
                  <label class="form-label">Edad:</label>
                  <input class="form-control" type="text" value="<?php echo e($worksheet->edadc); ?>" name="edadc" />
                </div>
                <div class="mb-3 col-md-3">
                  <label  class="form-label">OCUPACIÓN:</label>
                  <input class="form-control" type="text" value="<?php echo e($worksheet->ocupácionc); ?>" name="ocupaciontc"/>
                </div>
                <div class="mb-3 col-md-2">
                  <label  class="form-label">ESTADO CIVIL:</label>
                  <select class="form-select" id="exampleFormControlSelect1"  name="estadocivilc">
                    <option selected  value="<?php echo e($worksheet->estadocivilc); ?>"><?php echo e($worksheet->estadocivilc); ?></option>
                    <option value="Casado (a)">Casado (a)</option>
                    <option value="Soltero (a)">Soltero (a)</option>
                    <option value="Union Libre">Union Libre</option>
                    <option value="Viudo (a)">Viudo (a)</option>
                  </select>
                </div>

                <div class="mb-3 col-md-3">
                  <label class="form-label">INGRESOS:</label>
                  <input type="text" class="form-control" value="<?php echo e($worksheet->ingresos); ?>" name="ingresos"/>
                </div>
                <div class="mb-3 col-md-3">
                 <label class="form-label">TARJETAS:</label>
                 <input class="form-control" type="text" value="<?php echo e($worksheet->tarjetas); ?>" name="tarjetas" />
               </div>
               <?php endif; ?>
               <div class="mb-3 col-md-3">
                <label class="form-label">TELEFONO 1:</label>
                <input class="form-control" type="text" id="phoneNumber" name="telefono1" value="<?php echo e($lead->telefono1); ?>"/>
              </div>
              <div class="mb-3 col-md-3">
                <label for="zipCode" class="form-label">TELEFONO 2:</label>
                <input type="text" class="form-control" id="phoneNumber" name="telefono2" value="<?php echo e($lead->telefono2); ?>"/>
              </div>

              <div class="mb-3 col-md-3">
                <label class="form-label">CORREO ELECTRONICO:</label>
                <input type="email" class="form-control" id="emeal" name="correo" value="<?php echo e($lead->correo); ?>"/>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label" for="country">PAÍS:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="country" class="form-control" name="pais" value="<?php echo e($lead->pais); ?>"/>
                </div>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label" for="phoneNumber">CIUDAD:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="city"  class="form-control" value="<?php echo e($worksheet->ciudad); ?>" name="ciudad"/>
                </div>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label">C.P:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="zipcode" class="form-control" maxlength="6" value="<?php echo e($worksheet->cp); ?>" name="cp"/>
                </div>
              </div>

              <hr class="my-0" />
              <h5 class="card-header">DATOS DE RESERVA</h5>
              <div class="mb-3 col-md-2">
                <label class="form-label">DESTINO:</label>
                <input class="form-control" type="text" value="<?php echo e($ddr->destino); ?>" name="destino"  />
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label">HOTEL:</label>
                <input class="form-control" type="text" name="hotel" value="<?php echo e($ddr->hotel); ?>" />
              </div>
              <?php if($ddr->fecha_entrada == null): ?>
              <div class="mb-4 col-md-2">
                <label class="form-label" for="phoneNumber">TIPO DE FECHA:</label> <br>
                <input class="form-input" type="radio" name="fecha" />
                <label class="form-label" for="flexSwitchCheckDefault">Fecha Cerrada</label> <br>
                <input class="form-input" t
                ype="radio" name="fecha" type="radio"  id="ocultar-mostrar"/>
                <label class="form-label" for="flexSwitchCheckDefault">Fecha Abirta</label> <br>


              </div>
              <?php endif; ?>
              <div class="mb-3 col-md-1">
                <label class="form-label">#NOCHES:</label>
                <select class="form-select" name="noches"  id="exampleFormControlSelect1">
                  <option selected value="<?php echo e($ddr->noches); ?>"><?php echo e($ddr->noches); ?></option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div id='ocultar-y-mostrar' class="mb-3 col-md-4">
                <div class="col-md-5">
                  <label class="form-label" for="phoneNumber">CHECK IN:</label>
                  <div class="input-group input-group-merge">
                   <input class="form-control" type="date" value="<?php echo e($ddr->fecha_entrada); ?>" name="fecha_entrada"id="html5-date-input" />
                 </div>
               </div>
               <div class="col-md-5" style="float: right; margin-top: -60px;">
                <label class="form-label" for="phoneNumber">CHECK OUT:</label>
                <div class="input-group input-group-merge">
                 <input class="form-control" type="date" value="<?php echo e($ddr->fecha_salida); ?>" name="fecha_salida" id="html5-date-input" />
               </div>
             </div>
           </div>


           <div class="mb-3 col-md-3">
            <label class="form-label">HABITACIONES:</label>
            <input class="form-control" type="text" value="<?php echo e($ddr->habitaciones); ?>" name="habitaciones" />
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">TIPO DE HABITACIÓN:</label>
            <input class="form-control" type="text" value="<?php echo e($ddr->tipo_habitacion); ?>" name="tipo_habitaciones" />
          </div>
          <div class="mb-3 col-md-1">
            <label class="form-label" for="phoneNumber">ADULTOS:</label>
            <select class="form-select" name="adultos" id="exampleFormControlSelect1">
              <option selected value="<?php echo e($ddr->adultos); ?>"><?php echo e($ddr->adultos); ?></option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <div class="mb-3 col-md-1">
            <label class="form-label" for="phoneNumber">MENORES:</label>
            <select class="form-select" name="menores" id="mySelect">
              <option value="<?php echo e($ddr->menores); ?>"><?php echo e($ddr->menores); ?></option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>

          <div class="mb-3 col-md-1" id="content"></div>

          <div class="mb-3 col-md-3">
            <label class="form-label">PLAN DE ALIMENTOS:</label>
            <div class="input-group input-group-merge">
              <input type="text" class="form-control" name="plan" value="<?php echo e($ddr->plan); ?>" />
            </div>
                <select hidden id="smallSelect" class="form-select form-select-sm" name="moneda" >
                    
                    
                    <option selected  value="<?php echo e($worksheet->moneda); ?>"><?php echo e($worksheet->moneda); ?></option>
                   

                  </select>
          </div>
          <hr>
          <!-- Merged -->
       
        
         <div class="col-md-6">
            <div class=" mb-4">
              <h5 class="card-header">DATOS DE TARIFAS
                <small class="text-muted float-end">Moneda
                  <select id="smallSelect" class="form-select form-select-sm" name="moneda">
                    
                    
                    <option selected  value="<?php echo e($worksheet->moneda); ?>"><?php echo e($worksheet->moneda); ?></option>
                   
                    <option selected value="usd">USD</option>
                    <option value="mxm">MXN</option>
                  </select>
                </small>
              </h5>

              <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="form-password-toggle">
                  <label class="form-label"  for="basic-default-password32">COSTO TOTAL:</label>
                  <div class="input-group input-group-merge">

                    <input
                    type="text"
                    name="costo_total"

                    class="form-control <?php $__errorArgs = ['costo_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e($ddp->costo_total); ?>"/>

                    <span class="input-group-text">.00</span>
                    <?php $__errorArgs = ['costo_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e('campo obligatorio'); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>

                <div class="form-password-toggle">
                  <label class="form-label">PACKEO AGENTE:</label>
                  <div class="input-group input-group-merge">
                   <input value="<?php echo e($ddp->pakeo_agente); ?>" autofocus type="text" class="form-control <?php $__errorArgs = ['pakeo_agente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="basic-default-name"  name="pakeo_agente" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                   <?php $__errorArgs = ['pakeo_agente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">ACTIVACIÓN:</label>
                <div class="input-group input-group-merge">
                 <input value="<?php echo e($ddp->activacion); ?>" autofocus type="text" class="form-control <?php $__errorArgs = ['activacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="basic-default-name"  name="activacion" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 <?php $__errorArgs = ['activacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <span class="invalid-feedback" role="alert">
                  <strong><?php echo e('campo obligatorio'); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>

            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password32">RESORT FEE:</label>
              <div class="input-group input-group-merge">
               <input value="<?php echo e($ddp->reporte_fee); ?>" autofocus type="text" class="form-control <?php $__errorArgs = ['reporte_fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="basic-default-name"  name="reporte_fee" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
               <?php $__errorArgs = ['reporte_fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <span class="invalid-feedback" role="alert">
                <strong><?php echo e('campo obligatorio'); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>

          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">Pago Inicial:</label>
            <div class="input-group input-group-merge">
              <input value="<?php echo e($ddp->pago_inicial); ?>" autofocus class="form-control <?php $__errorArgs = ['pago_inicial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"  name="pago_inicial" id="html5-date-input" />
              <?php $__errorArgs = ['pago_inicial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e('campo obligatorio'); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

          </div>

          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">PENDIENTE DE PAGO:</label>
            <div class="input-group input-group-merge">
             <input value="<?php echo e($ddp->pendiente_de_pago); ?>" autofocus type="text" class="form-control <?php $__errorArgs = ['pendiente_de_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="basic-default-name"  name="pendiente_de_pago" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
             <?php $__errorArgs = ['pendiente_de_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <span class="invalid-feedback" role="alert">
              <strong><?php echo e('campo obligatorio'); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div class="form-password-toggle">
          <label class="form-label">CONCEPTO:</label>
          <div class="input-group input-group-merge">
           <input value="<?php echo e($ddp->concepto); ?>" autofocus type="text" class="form-control <?php $__errorArgs = ['concepto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="basic-default-name"  name="concepto" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
           <?php $__errorArgs = ['concepto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <span class="invalid-feedback" role="alert">
            <strong><?php echo e('campo obligatorio'); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="form-password-toggle">
        <label class="form-label" for="basic-default-password32">FECHA LIMITE DE PAGO:</label>
        <div class="input-group input-group-merge">
          <input value="<?php echo e($ddp->fecha_limite); ?>" autofocus class="form-control <?php $__errorArgs = ['fecha_limite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"  name="fecha_limite" id="html5-date-input" />
          <?php $__errorArgs = ['fecha_limite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e('campo obligatorio'); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

      </div>

    </div>
  </div>

</div>


<!-- Merged -->
<div class="col-md-6">
  <div class="mb-4">
    <h5 class="card-header">FORMAS DE PAGO</h5>
    <div class="card-body demo-vertical-spacing demo-only-element">
      <div class="demo-inline-spacing mt-3">
        <div class="list-group">
          <label class="list-group-item">

             <?php if($fdp->banco ): ?>
            <input checked class="form-check-input " name="forma_pago"   type="radio" value="NuevaTarjeta" />
            Nueva Tarjeta
            <?php else: ?>
            
            <input class="form-check-input " name="forma_pago"   type="radio" value="NuevaTarjeta" />
            Nueva Tarjeta

            <?php endif; ?>
    
            <div class="collapse.show" id="collapseExample3" style="background-color: #fff !important;">
              <br>
              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">BANCO:</label>
                <div class="input-group input-group-merge">
                  <input type="text" value="<?php echo e($fdp->banco); ?>" name="banco" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                </div>
              </div>
              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">TITULAR:</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="<?php $__errorArgs = ['titular'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($fdp->titular); ?>" name="titular" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                  <?php $__errorArgs = ['titular'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <?php if($fdp->afiliacion == 'MC'): ?>
              <div class="mb-3 col-md-8">
                <label class="form-label">AFILIACION:</label><br>
                <div class="form-check form-check-inline mt-2">
                  <input  class="form-input " type="radio" value="VISA" name="afiliacion" id="inlineRadio1"/>
                  <label class="form-label" for="inlineRadio1">VISA</label>
                </div>
                <div class="form-check form-check-inline">
                  <input checked class="form-input " type="radio" value="MC" name="afiliacion" id="inlineRadio2"/>
                  <label class="form-label" for="inlineRadio2">MC</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-input " type="radio" value="AMEX" name="afiliacion"  id="inlineRadio3"/>
                  <label class="form-label" for="inlineRadio2">AMEX</label>
                </div>
              </div>
              <?php endif; ?>

              <?php if($fdp->afiliacion == 'VISA'): ?>
              <div class="mb-3 col-md-8">
                <label class="form-label">AFILIACION: </label><br>
                <div class="form-check form-check-inline mt-2">
                  <input checked  class="form-input " type="radio" value="VISA" name="afiliacion" id="inlineRadio1"/>
                  <label class="form-label" for="inlineRadio1">VISA</label>
                </div>
                <div class="form-check form-check-inline">
                  <input  class="form-input " type="radio" value="MC" name="afiliacion" id="inlineRadio2"/>
                  <label class="form-label" for="inlineRadio2">MC</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-input " type="radio" value="AMEX" name="afiliacion"  id="inlineRadio3"/>
                  <label class="form-label" for="inlineRadio2">AMEX</label>
                </div>
              </div>
              <?php endif; ?>

              <?php if($fdp->afiliacion == 'AMEX'): ?>
              <div class="mb-3 col-md-8">
                <label class="form-label">AFILIACION:</label><br>
                <div class="form-check form-check-inline mt-2">
                  <input   class="form-input " type="radio" value="VISA" name="afiliacion" id="inlineRadio1"/>
                  <label class="form-label" for="inlineRadio1">VISA</label>
                </div>
                <div class="form-check form-check-inline">
                  <input  class="form-input " type="radio" value="MC" name="afiliacion" id="inlineRadio2"/>
                  <label class="form-label" for="inlineRadio2">MC</label>
                </div>
                <div class="form-check form-check-inline">
                  <input checked class="form-input " type="radio" value="AMEX" name="afiliacion"  id="inlineRadio3"/>
                  <label class="form-label" for="inlineRadio2">AMEX</label>
                </div>
              </div>
              <?php endif; ?>

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">16 DIGITOS:</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="<?php $__errorArgs = ['digitos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" maxlength="16"  value="<?php echo e($fdp->digitos); ?>" name="digitos" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                  <?php $__errorArgs = ['digitos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
              <div class="mb-3 col-md-7">
                <label class="form-label">VIGENCIA:</label>
                <div class="input-group">
                  <input type="text" class="form-control validar <?php $__errorArgs = ['vigencia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e($fdp->vigencia); ?>" name="vigencia" maxlength="5">
                  <?php $__errorArgs = ['vigencia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
              </div>
              <div class="mb-3 col-md-4" style="float: right; margin-top:-68px !important;">
                <label class="form-label">CVV:</label>
                <input class="form-control validar <?php $__errorArgs = ['CVV'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($fdp->CVV); ?>"  name="CVV" type="text" maxlength="4"/>
                <?php $__errorArgs = ['CVV'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e('campo obligatorio'); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div>
               <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
               <input class="form-control <?php $__errorArgs = ['nota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="textarea" name="nota"  value="<?php echo e($fdp->nota); ?> "  rows="3"></input>
               <?php $__errorArgs = ['nota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <span class="invalid-feedback" role="alert">
                <strong><?php echo e('campo obligatorio'); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

          </div>
        </label>

        <label class="list-group-item">
            <?php if($ddp->forma_de_pago != 'Transferencia' or $ddp->forma_de_pago === 'PagoenLinea' or $ddp->forma_de_pago === ''): ?>
          <input  class="form-check-input <?php $__errorArgs = ['forma_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="Transferencia" name="forma_pago" type="radio" />
          Transferencia
         
          <?php endif; ?>
          <?php if($ddp->forma_de_pago === "Transferencia"): ?>
          <input checked   class="form-check-input <?php $__errorArgs = ['forma_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="Transferencia" name="forma_pago" type="radio"  />
          Transferencia
          <?php $__errorArgs = ['forma_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <?php endif; ?>
        </label>
        <label class="list-group-item">
          <?php if($ddp->forma_de_pago === 'PagoenLinea'): ?>
          <input checked   class="form-check-input <?php $__errorArgs = ['forma_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="PagoenLinea" name="forma_pago" type="radio" />
          Pago en Linea
          <?php else: ?>           
          <input  class="form-check-input <?php $__errorArgs = ['forma_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="PagoenLinea" name="forma_pago" type="radio" />
          Pago en Linea
          <?php endif; ?>
        </label>
      </div>
    </div>
     </div>
      </div>
</div>

 

  <?php if($ddp->costo_total): ?>
  <hr>
  <h5 class="card-header">DETALLES DE PAGO</h5>
<div class="table-responsive text-nowrap">
 <table class="table table-hover">
  <thead class="thead">
    <tr>
      <th>No</th>
      <th>Id</th>
      <th>Costo Total</th>
      <th>Pakeo Agente</th>
      <th>Activacion</th>
      <th>FEE</th>
      <th>Pago Inicial</th>
      <th>Pendiente</th>
      <th>Fecha limite</th>
      <th>forma de pago</th>
     <th>Comprobante</th>      
      <th></th>
    </tr>
  </thead>
  <tbody class="table-border-bottom-0">
    
    <tr>
    <?php if($worksheet->moneda == 'mxm'): ?>
      <td><?php echo e(++$i); ?></td>
      <td><?php echo e($ddp->id); ?></td>
      <td>$ <?php echo e($ddp->costo_total); ?> MXM </td>
      <td>$ <?php echo e($ddp->pakeo_agente); ?> MXM </td>
      <td>$ <?php echo e($ddp->activacion); ?> MXM </td>
      <td>$ <?php echo e($ddp->reporte_fee); ?> MXM </td>
      <td>$ <?php echo e($ddp->pago_inicial); ?> MXM </td>
      <td>$ <?php echo e($ddp->pendiente_de_pago); ?> MXM </td>
      <td> <?php echo e($ddp->created_at); ?></td>
    <?php switch($ddp->forma_de_pago):
    case ('PagoenLinea'): ?>
        <td><?php echo e('Pago en linea'); ?></td>
        <?php break; ?>
    <?php case ('Transferencia'): ?>
        <td><?php echo e('Transferencia'); ?></td>
        <?php break; ?>
    <?php default: ?>
    <td><?php echo e('**** **** **** **** '); ?><?php echo e(substr( $ddp->forma_de_pago, -4)); ?></td>
        <?php break; ?>
    <?php endswitch; ?>
         <?php if($ddp->comprovante): ?>
      <td><img width=40px onclick="abreModalImagen(this)" src="<?php echo e($ddp->getMedia('comprovantes')->first()->getUrl()); ?>"></td>
      <td>      
     <?php else: ?>
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input   name="idt" value="<?php echo e($ddp->id); ?>"> 
            <input  autofocus type="file" id="avatarFile" name="comprovantet" class="account-file-input "    accept="image/png, image/jpeg" />
            </input>
          </label>
        </div>
  </td>
  </td>
     <?php endif; ?>
     <?php endif; ?>
     <?php if($worksheet->moneda == 'usd'): ?>
      <td><?php echo e(++$i); ?></td>
      <td><?php echo e($ddp->id); ?></td>
      <td>$<?php echo e($ddp->costo_total); ?> USD</td>
      <td>$<?php echo e($ddp->pakeo_agente); ?> USD</td>
      <td>$<?php echo e($ddp->activacion); ?> USD</td>
      <td>$<?php echo e($ddp->reporte_fee); ?> USD</td>
      <td>$<?php echo e($ddp->pago_inicial); ?> USD</td>
      <td>$<?php echo e($ddp->pendiente_de_pago); ?> USD</td>
      <td> <?php echo e($ddp->created_at); ?></td>
    <?php switch($ddp->forma_de_pago):
    case ('PagoenLinea'): ?>
        <td><?php echo e('Pago en linea'); ?></td>
        <?php break; ?>
    <?php case ('Transferencia'): ?>
        <td><?php echo e('Transferencia'); ?></td>
        <?php break; ?>
    <?php default: ?>
    
    <td><?php echo e('**** **** **** ****  '); ?><?php echo e(substr( $ddp->forma_de_pago, -4)); ?></td>
        <?php break; ?>
    <?php endswitch; ?>
     <?php if($ddp->comprovante): ?>
      <td><img width=40px onclick="abreModalImagen(this)" src="<?php echo e($ddp->getMedia('comprovantes')->first()->getUrl()); ?>"></td>
      <td>      
     <?php else: ?>
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class=" me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input  hidden  name="idt" value="<?php echo e($ddp->id); ?>"> </input>
            <input  autofocus  type="file" id="avatarFile" name="comprovantet" class="account-file-input "    accept="image/png, image/jpeg"/>
          </label>
        </div>
  </td>
  </td>
     <?php endif; ?>
      <?php endif; ?> 
    </tr>
    
  </tbody>
</table>
<hr>
</div>
<?php endif; ?>

 <!--historial de pagos-->
<?php if($ddpm->fecha_de_pago): ?>
<h5 class="card-header">HISTORIAL DE PAGOS</h5>
<div class="table-responsive text-nowrap">
<table class="table table-hover">
  <thead class="thead">
    <tr>
      <th>No</th>
      <th>Id</th>
      <th>Fecha de Pago</th>
      <th>Cantidad</th>
      <th>Concepto</th>
      <th>Estado</th>
      <th>Pago Asignado a:</th>
      <th>Forma de pago:</th>
      <th>Numero de aprovacion</th>
      <th>Comproante</th>
      <th></th>
    </tr>
  </thead>
  <div class="table-responsive text-nowrap">
    <tbody class="table-border-bottom-0">
      <?php $__currentLoopData = $ddp3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(++$i); ?></td>
        <td name="idp"><?php echo e($pago->id); ?></td>
        <td><?php echo e($pago->fecha_de_pago); ?></td>
         <?php if($worksheet->moneda == 'mxm'): ?>
         <td>$<?php echo e($pago->cantidad); ?> MXM</td>
     <?php endif; ?>
     <?php if($worksheet->moneda == 'usd'): ?>
      <td>$<?php echo e($pago->cantidad); ?> USD</td>
     <?php endif; ?>
        <td><?php echo e($pago->concepto); ?></td>
        <td><?php echo e($pago->status_de_pago); ?></td>
        <td><?php echo e($pago->pago_asignado); ?></td>
     <?php switch($pago->forma_de_pago):
    case ('PagoenLinea'): ?>
        <td><?php echo e('Pago en linea'); ?></td>
        <?php break; ?>
    <?php case ('Transferencia'): ?>
        <td><?php echo e('Transferencia'); ?></td>
        <?php break; ?>
    <?php default: ?>
    <td><?php echo e('**** **** **** ****  '); ?><?php echo e(substr( $pago->forma_de_pago, -4)); ?></td>
        <?php break; ?>
    <?php endswitch; ?>
        <td><?php echo e($pago->num_aprovacion); ?></td>
     <?php if($pago->comprovante): ?>
      <td><img width=40px onclick="abreModalImagen(this)" src="<?php echo e($pago->getMedia('comprovantes')->first()->getUrl()); ?>"></td>
      <td>      
     <?php else: ?>
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class=" me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <input  autofocus  type="file" id="avatarFile" name="comprovantel[<?php echo e($pago->id); ?>]" class="account-file-input "    accept="image/png, image/jpeg"/>
          </label>
        </div>

  </td>
  </td>
     <?php endif; ?>
        <td>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
   </div>
 
<div class="modal" id="modal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <img  id="miImagenModal">
      <button onclick="cerrarModalImagen(this)" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      


    </div>
  </div>
</div>
 <?php endif; ?>


<div  style="background-color: #fff !important;">
  <div class="d-grid d-sm-flex p-3" >

   <!-- Merged -->
   
   
   <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Administrador|Gerente|Verificacion')): ?>
   
   <div class="col-md-6">
    <div class=" mb-4">
      <h5 class="card-header">REALIZAR UN PAGO


        <div class="card-body demo-vertical-spacing demo-only-element">
          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">FECHA DE PAGO:</label>
            <div class="input-group input-group-merge">
              <input class="form-control validar <?php $__errorArgs = ['fecha_de_pago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('fecha_de_pago2')); ?>" type="date" name="fecha_de_pago2"  id="html5-date-input" />
              <?php $__errorArgs = ['fecha_de_pago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password32">CANTIDAD:</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">$</span>
                <input
                type="text"
                name="cantidad2"
                class="form-control <?php $__errorArgs = ['cantidad2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('cantidad2')); ?>" 
                aria-label="Cantidad (en dolares)" 
                /><span class="input-group-text">.00</span><?php $__errorArgs = ['cantidad2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback " role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="form-password-toggle">
                <label class="form-label">CONCEPTO:</label>
                <div class="input-group input-group-merge">
                 <input name="conceptop2" type="text" class=" <?php $__errorArgs = ['conceptop2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('conceptop2')); ?>" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 <?php $__errorArgs = ['conceptop2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                   
                 </div>
               </div>

               <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">ESTATUS DE PAGO:</label>
                <div class="input-group input-group-merge">
                 <select   name="status_de_pago2" class="form-select  <?php $__errorArgs = ['status_de_pago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                  <option value="<?php echo e(old('status_de_pago2')); ?>"><?php echo e(old('status_de_pago2')); ?></option>
                  <option value="pendiente de pago">Pendiente de Pago</option>
                  <option value="pagado">Pagado</option>
                  <option value="devolucion">Devolución</option>
                </select>
                <?php $__errorArgs = ['status_de_pago'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

              </div>

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">PAGO ASIGNADO A:</label>
                <div class="input-group input-group-merge">
                 <input type="text" class=" <?php $__errorArgs = ['pago_asignado2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('pago_asignado2')); ?>" name="pago_asignado2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 <?php $__errorArgs = ['pago_asignado2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
               </div>

               <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">No. DE APROVACION:</label>
                <div class="input-group input-group-merge">
                 <input type="text" class=" <?php $__errorArgs = ['num_aprovacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('num_aprovacion2')); ?>" name="num_aprovacion2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 <?php $__errorArgs = ['num_aprovacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                 </div>
                 <div>
                   <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
                   <textarea class="form-control " name="notap2" value="<?php echo e(old('notap2')); ?>" id="exampleFormControlTextarea1" rows="3"></textarea>

                 </div>
               </div>
             </div>
           </div>
         </div>


         <!-- Merged  forma de pago agregar tarjeta nueva  -->
         <div class="col-md-6">
          <div class="mb-4">
            <h5 class="card-header">FORMAS DE PAGO</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
              <div class="demo-inline-spacing mt-3">
                <div class="list-group">

                  <table class="table table-hover list-group-item ">
                    <thead class="thead">
                      <tr>
                        <th>Numero</th>





                      </tr>
                    </thead>
                    <div class="table-responsive text-nowrap">
                      <tbody class="table-border-bottom-0">
             <?php if($fdpl2->id): ?>  
                    <?php $__currentLoopData = $fdpl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php $__currentLoopData = $ddpl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($formad->id === $forma->detalles_de_pagos_id): ?>
                         <tr>
                         <!--colappse cuando ya existen pagos-->
                         <td class="mb-3 col-md-1" ><input class="form-check-input <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="formaPago2"  value="<?php echo e($forma->digitos); ?>" />
                           <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                            <strong><?php echo e('campo obligatorio'); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                        <td><span> <i class='bx bx-show-alt me-1' data-bs-toggle="collapse"
                          data-bs-target="#collapseExample4<?php echo e($i); ?>"aria-expanded="true"></i></span>
                          <div class="collapse" id="collapseExample4<?php echo e($i); ?>">
                            <br>
                            <div class="form-password-toggle">
                              <label class="form-label" >BANCO:</label>
                              <div class="input-group input-group-merge">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->banco); ?>

                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">TITULAR:</label>
                              <div class="input-group input-group-merge">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->titular); ?>

                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">AFILIACION:</label>
                              <div class="form-check form-check-inline mt-2">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->afiliacion); ?>

                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label" >16 Digitos:</label>
                              <div class="form-password-toggle">
                                <label type="text" id="basic-default-name"  style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->digitos); ?>

                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">VIGENCIA:</label>
                              <div class="input-group">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->vigencia); ?>

                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">CVV:</label>
                              <div class="form-password-toggle" style="float: right; margin-top:-68px !important;">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                <?php echo e($forma->CVV); ?>

                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="mb-3 col-md-5" ><?php echo e('**** **** **** **** '); ?><?php echo e(substr( $forma->digitos, -4)); ?> </td>
                      </tr>

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $i++;
                        ?>
                       
                           
                        
                       
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                     
                      <?php endif; ?>
                    </tbody>
                  </table>
                  <label class="list-group-item">
                    <input class="form-check-input <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="formaPago2" value="nuevatarjeta2" id="inlineRadio1" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample3"
                    aria-expanded="true"
                    <?php if((!old() && $myDefault= false) || old('formaPago2') == 'nuevatarjeta'): ?> checked="checked" <?php endif; ?>
                    />
                    <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e('campo obligatorio'); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    Nueva Tarjeta

                    <div class="collapse" id="collapseExample3" style="background-color: #fff !important;">
                      <br>
                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">BANCO:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="<?php $__errorArgs = ['banco2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('banco2')); ?>" name="banco2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          <?php $__errorArgs = ['banco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e('campo obligatorio'); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">TITULAR:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="<?php $__errorArgs = ['titular2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('titular2')); ?>" name="titular2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          <?php $__errorArgs = ['titular2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e('campo obligatorio'); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="mb-3 col-md-8">
                        <label class="form-label">AFILIACION:</label><br>
                        <div class="form-check form-check-inline mt-2">
                          <input class="form-input <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" value="VISA" name="afiliacion2" id="inlineRadio1" />
                          <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          <label class="form-label" for="inlineRadio1">VISA</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-input <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" value="MC" name="afiliacion2" id="inlineRadio2" />
                          <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                          <label class="form-label" for="inlineRadio2">MC</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-input <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" value="AMEX" name="afiliacion2"  id="inlineRadio3" />
                          <?php $__errorArgs = ['afiliacion2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback" role="alert"><strong><?php echo e('campo obligatorio'); ?></strong></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          <label class="form-label" for="inlineRadio2">AMEX</label>
                        </div>

                      </div>

                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">16 DIGITOS:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="<?php $__errorArgs = ['digitos2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" maxlength="16"  value="<?php echo e(old('digitos2')); ?>" name="digitos2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          <?php $__errorArgs = ['digitos2'];
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
                      <div class="mb-3 col-md-7">
                        <label class="form-label">VIGENCIA:</label>
                        <div class="input-group">
                          <input type="text" class="form-control validar <?php $__errorArgs = ['vigencia2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('vigencia2')); ?>" name="vigencia2" maxlength="5">
                          <?php $__errorArgs = ['vigencia2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e('campo obligatorio'); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                      </div>
                      <div class="mb-3 col-md-4" style="float: right; margin-top:-68px !important;">
                        <label class="form-label">CVV:</label>
                        <input class="form-control validar <?php $__errorArgs = ['CVV2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('CVV2')); ?>"  name="CVV2" type="text" maxlength="4"/>
                        <?php $__errorArgs = ['CVV2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                          <strong><?php echo e('campo obligatorio'); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div>
                       <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
                       <textarea class="form-control <?php $__errorArgs = ['nota2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nota2" value="<?php echo e(old('nota2')); ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                       <?php $__errorArgs = ['nota2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                       <span class="invalid-feedback" role="alert">
                        <strong><?php echo e('campo obligatorio'); ?></strong>
                      </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                  </div>
                </label>
                
                <label class="list-group-item">
                  <input class="form-check-input me-1 <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" value="Transferencia" name="formaPago2" data-bs-toggle="collapsing" data-bs-target="#collapseExample3" aria-expanded="true"  id="inlineRadio2" data-parent="#selector"
                  <?php if((!old() && $myDefault= false) || old('formaPago2') == 'Transferencia'): ?> checked="checked" <?php endif; ?>
                  />
                  <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  Transferencia
                </label>


                <label class="list-group-item">
                  <input class="form-check-input me-1 <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" value="PagoenLinea" name="formaPago2" hidden-bs-collapse="collapse" data-bs-target="#collapseExample3" aria-expanded="true"  id="inlineRadio3" data-parent="#selector"
                  <?php if((!old() && $myDefault= false) || old('formaPago2') == 'PagoenLinea'): ?> checked="checked" <?php endif; ?>/>
                  <?php $__errorArgs = ['formaPago2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e('campo obligatorio'); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  Pago en Linea
                </label>

              </div>

            </div>
            <div class="row mb-3">
              <p>Comporbante de cargo</p>
              <div class="col-md-12">
               <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                src="<?php echo e(asset('assets/img/avatars/1.png')); ?>"
                alt="user-avatar"
                class="d-block rounded"
                height="100"
                width="100"
                id="uploadedAvatar"
                />
                <div class="button-wrapper">
                  <label for="avatarFile" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Subir Comprobante</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input

                    autofocus
                    type="file"
                    id="avatarFile"
                    name="comprovante22"

                    class="account-file-input <?php $__errorArgs = ['comprovante22'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    hidden
                    accept="image/png, image/jpeg"
                    />
                    <?php $__errorArgs = ['comprovante22'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e('campo obligatorio'); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

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
          <hr>
                
                         <?php if($worksheet->moneda == 'usd'): ?>
                        <h5 class="card-header" style="float:left;">Balance: $ <?php echo e($CostoTotal); ?> USD </h5>

                        <?php endif; ?>

                         <?php if($worksheet->moneda == 'mxm'): ?>
                        <h5 class="card-header" style="float:left;">Balance : $ <?php echo e($CostoTotal); ?> MXM </h5>
                        <?php endif; ?>
                       
                        
                        <?php endif; ?>
          

        </div>
      </div>
    </div>
  </div>
</div>
<p class="demo-inline-spacing">






</p>






<!-- /Account -->
</div>

</div>

</div>

</div>
<hr>
<div>
  <button type="submit" class="btn btn-primary me-2">Guardar Información</button>
  <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
</div>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vacationcardsgitbk\resources\views/lead/worksheet-q.blade.php ENDPATH**/ ?>