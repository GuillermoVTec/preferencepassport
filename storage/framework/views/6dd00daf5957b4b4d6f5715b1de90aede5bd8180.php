<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

   <title><?php echo e('CRM Vacation Cards'); ?></title>

    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon/favicon.png')); ?>" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->


    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/boxicons.css')); ?>" />
    <!-- Core CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/core.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/theme-default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/pages/page-auth.css')); ?>">
   
    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <script type="text/javascript">

        function callbackThen(response){

        // read HTTP status

        console.log(response.status);

        // read Promise object

        response.json().then(function(data){

        console.log(data);

        });

        }

        function callbackCatch(error){

        console.error('Error:', error)

        }

        </script>

        <?php echo htmlScriptTagJsApi([

        'callback_then' => 'callbackThen',

        'callback_catch' => 'callbackCatch'

        ]); ?>

  </head>

  <body style=" background: url(assets/img/index.jpg) no-repeat center center fixed;  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <!-- Content -->
   

    
    <div class="container-xxl" >
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                 <img src="<?php echo e(asset('assets/img/elements/logo.png')); ?>" width="200" />
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Bienvenidos 👋</h4>
              <p class="mb-4"><hr></p>

              <form id="formAuthentication" method="POST" class="mb-3" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                            <div class="md-3">
                                <label for="email" class="form-label">Email o Usuario</label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus/>

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



                        <div class="row mb-3">
                            
                            <div class=" form-password-toggle   form-password-toggle">
                                <label for="basic-default-password" class=" col-form-label "><?php echo e(__('Password')); ?></label>
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
                                <span class=" cursor-pointer">  </span>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                  <div class="mb-3">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-control-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                     </div>   
                    </div>
                    </div>

                    </div>

   
                
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary d-grid w-100">
                                    <?php echo e(__('Login')); ?>

                                </button>


                            </div>
                        
              </form>

            </div>
          </div>
       
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <div class="buy-now">

    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>


 
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
<?php /**PATH /home/soaonjvfyv03/public_html/prueba/preferencepassport/resources/views/auth/login.blade.php ENDPATH**/ ?>