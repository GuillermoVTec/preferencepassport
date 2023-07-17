
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Preference Passport' }}</title>

   

    <!-- Icons. Uncomment required icon fonts -->

    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
   
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
  
    

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Helpers -->
    <script src=" {{asset('assets/js/app.js')}}"></script>

   
    <script src="{{asset('assets/js/config.js')}}"></script>

        <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
   
  
   

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.png')}}" />


    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>


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

        {!! htmlScriptTagJsApi([

        'callback_then' => 'callbackThen',

        'callback_catch' => 'callbackCatch'

        ]) !!}
    
    @livewireStyles
</head>
<body>
   <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
       <!-- Menu -->
 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('home') }}" class="app-brand-link">
               <img src="{{asset('assets/img/elements/logo.png')}}" width="200" />
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>

                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item ">

              @role('Verificacion')
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('nuevoVlo') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-task'></i> Nueva</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('noVentaVlo') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-x-circle"></i>  No Venta</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('VentaVlo') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-check-square"></i> Venta</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('DP') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-file-find"></i> Documentos Pendientes</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('DC') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Documentos Completos</div>
                    </a>
                </li>
                </ul>
           
              @endrole
               @role('Reservaciones')
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('abiertas') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-task'></i> Abiertas</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('DPR') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-x-circle"></i>  Documentos Pendientes</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('suspendida') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-check-square"></i> Suspendida</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('rechazada') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-file-find"></i> Rechazada por el hotel</div>
                    </a>
                </li>
                </ul>
                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('cancelada') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Cancelada</div>
                    </a>
                </li>
                </ul>
                                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('solicitada') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Solicitada</div>
                    </a>
                </li>
                </ul>
                                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('fee') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Pago de fee pendiente</div>
                    </a>
                </li>
                </ul>
                                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('pre') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Pre confirmada</div>
                    </a>
                </li>
                </ul>
                                                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('confirmada') }}" class="menu-link">

                    <div data-i18n="Without menu"><i class="bx bx-file"></i> Confirmada</div>
                    </a>
                </li>
                </ul>
           
              @endrole
             @role('Gerente')
                 <li class="menu-item">
                     <a href="{{ route('leadsCreate') }}" class="menu-link">
                     <div data-i18n="Without menu"><i class='bx bxs-message-square-add' ></i>Agregar lead</div>
                     </a>
                </li>
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('indexAdmin') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-list-ul'></i>Lista de lead</div>
                    </a>
                </li>
                </ul>
                 <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('asignar') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-message-alt-add' ></i>Asignar leads</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('reasignar') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bxs-message-alt-add' ></i>Reasignar leads</div>
                    </a>
                </li>
                </ul>
              @endrole
              @role('Gerente Ventas')

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('indexAdmin') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-list-ul' ></i>Lista de lead</div>
                    </a>
                </li>
                </ul>
                 <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('asignar') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-message-alt-add' ></i>Asignar leads</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('reasignar') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bxs-message-alt-add' ></i>Reasignar leads</div>
                    </a>
                </li>
                </ul>
              @endrole

                @role('Administrador')
              <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div data-i18n="Analytics">Leads</div>
              </a>  
              @endrole
                @role('Distribuidor')
                
              <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Analytics">Registros</div>
              </a>
              @endrole

                 <ul class="menu-sub">
                @role('Administrador')

                 <li class="menu-item">
                     <a href="{{ route('leadsCreate') }}" class="menu-link">
                     <div data-i18n="Without menu">Agregar lead</div>
                     </a>
                </li>
                @endrole
                @role('Distribuidor')
                 <li class="menu-item">
                     <a href="{{ route('leadsCreate') }}" class="menu-link">
                     <div data-i18n="Without menu">Registrar Tarjeta</div>
                     </a>
                </li>
                
                @endrole
                </ul>
                @role('Administrador')

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('indexAdmin') }}" class="menu-link">
                    <div data-i18n="Without menu">Lista de lead</div>
                    </a>
                </li>
                @endrole
                @role('Administradorr')
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('asignar') }}" class="menu-link">
                    <div data-i18n="Without menu">Asignar leads</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('reasignar') }}" class="menu-link">
                    <div data-i18n="Without menu">Reasignar leads</div>
                    </a>
                </li>
                </ul>


                @endrole
                @role('Distribuidor')
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('indexDist')}}" class="menu-link">
                    <div data-i18n="Without menu">Activados</div>
                    </a>
                </li>
                </ul>
                @endrole
                @role('Ventas')
                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('nuevo') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-task'></i>Nueva</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('seguimiento') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bxs-analyse'></i>Seguimiento</div>
                    </a>
                </li>
                </ul>

               <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('nocontesto') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-check-square"></i>No contesto</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('nointeresado') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-check-square"></i>No interesado</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('datosincorrectos') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class="bx bx-check-square"></i>Datos incorrectos</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('activados') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-check-square'></i>Activados</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-item">
                <li class="menu-item">
                    <a href="{{ route('preregistro') }}" class="menu-link">
                    <div data-i18n="Without menu"><i class='bx bx-spreadsheet'></i>Pre registro</div>
                    </a>
                </li>
                </ul>
                </li>
                @endrole
            

            @role('Administrador')
            
                <li class="menu-item ">
                <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div data-i18n="Analytics">Venta</div>
                </a>
                 
                 <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('nuevo') }}" class="menu-link">
                    <div data-i18n="Without menu">Nueva</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('seguimiento') }}" class="menu-link">
                    <div data-i18n="Without menu">Seguimiento</div>
                    </a>
                </li>
                </ul>

               <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('nocontesto') }}" class="menu-link">
                    <div data-i18n="Without menu">No contesto</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('nointeresado') }}" class="menu-link">
                    <div data-i18n="Without menu">No interesado</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('datosincorrectos') }}" class="menu-link">
                    <div data-i18n="Without menu">Datos incorrectos</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('activados') }}" class="menu-link">
                    <div data-i18n="Without menu">Activados</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('preregistro') }}" class="menu-link">
                    <div data-i18n="Without menu">Pre registro</div>
                    </a>
                </li>
                </ul>
                </li>
                
                
                 <li class="menu-item ">
                <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div data-i18n="Analytics">Verificacion</div>
                </a>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('nuevoVlo') }}" class="menu-link">
                    <div data-i18n="Without menu"> Nueva</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('noVentaVlo') }}" class="menu-link">
                    <div data-i18n="Without menu">  No Venta</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('VentaVlo') }}" class="menu-link">
                    <div data-i18n="Without menu"> Venta</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('DP') }}" class="menu-link">
                    <div data-i18n="Without menu"> Documentos Pendientes</div>
                    </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('DC') }}" class="menu-link">

                    <div data-i18n="Without menu"> Documentos Completos</div>
                    </a>

                </li>
                </ul>
                </li>

                <li class="menu-item ">
                <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar-check"></i>
                <div data-i18n="Analytics">Reservaciones</div>
                </a>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('abiertas') }}" class="menu-link">
                    <div data-i18n="Without menu"> Abiertas</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('DPR') }}" class="menu-link">
                    <div data-i18n="Without menu">  Documentos Pendientes</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('suspendida') }}" class="menu-link">
                    <div data-i18n="Without menu"> Suspendida</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('rechazada') }}" class="menu-link">
                    <div data-i18n="Without menu"> Rechazada por el hotel</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('cancelada') }}" class="menu-link">

                    <div data-i18n="Without menu"> Cancelada</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('solicitada') }}" class="menu-link">

                    <div data-i18n="Without menu"> Solicitada</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('fee') }}" class="menu-link">

                    <div data-i18n="Without menu"> Pago de fee pendiente</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('pre') }}" class="menu-link">

                    <div data-i18n="Without menu"> Pre confirmada</div>
                    </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('confirmada') }}" class="menu-link">

                    <div data-i18n="Without menu"> Confirmada</div>
                    </a>
                </li>
                </ul>


                </li>


            <li class="menu-item ">
              <a href="{{ route('distribuidores.index') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-credit-card"></i>
                <div data-i18n="Analytics">Distribuidores</div> 
              </a>

                 <ul class="menu-sub">
                 <li class="menu-item">
                     <a href="{{ route('register2') }}" class="menu-link">
                     <div data-i18n="Without menu">Agregar distribuidor</div>
                     </a>
                </li>
                </ul>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('distribuidores.index') }}" class="menu-link">
                    <div data-i18n="Without menu">Lista de distribuidores</div>
                    </a>
                </li>
                </ul>

                </li>
                

 
             <li class="menu-item">
              <a href="{{ route('register') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">Usuarios</div> 
              </a>

                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('register') }}" class="menu-link">
                    <div data-i18n="Without menu">Registrar usuario</div>
                    </a>
                </li>
                </ul>
                 <ul class="menu-sub">
                 <li class="menu-item">
                     <a href="{{ route('users.index') }}" class="menu-link">
                     <div data-i18n="Without menu">Lista de usuarios</div>
                     </a>
                </li>
                </ul>
                </li>            
             <li class="menu-item ">
              <a href="{{ route('distribuidores.index') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-comment-check"></i>
                <div data-i18n="Analytics">Cerradores</div> 
              </a>
                 <ul class="menu-sub">
                 <li class="menu-item">
                     <a href="{{ route('CerradorCreate') }}" class="menu-link">
                     <div data-i18n="Without menu">Agregar Cerrador</div>
                     </a>
                </li>
                </ul>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('cerrador') }}" class="menu-link">
                    <div data-i18n="Without menu">Lista Cerrador</div>
                    </a>
                </li>
                </ul>
                </li>
            @endrole
            
            
          </ul>
        </aside>
          
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

           <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                      </li>
                      
  
                    </ul>
                    
                  </div>
                </div>
              </div>

              <!-- /Search -->
                                      <!-- Authentication Links -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                          <li class="nav-item lh-1 me-3">

                            <div class="flex-grow-1">
                            @role('Administrador')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            @endrole
                            @role('Ventas')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                             @role('Gerente')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                            @role('Gerente Ventas')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                           @role('Reservaciones')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                            @role('Verificacion')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                            @role('Distribuidor')
                            <span class="fw-semibold d-block">{{ Auth::user()->distribuidore->representantelegal }}</span>

                            @endrole
                            </div>

                             </li>

                    

                         <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                 <a id="nav-link dropdown-toggle hide-arrow" class=" dropdown" href="{{ route('home') }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <div class="avatar avatar-online">
                                 <img src=" {{Auth::user()->getMedia('avatars')->first()->getUrl('thumb');}}" alt class="w-px-40 h-auto rounded-circle">
                                 </div>
                                 </a>                          
                            <ul class="dropdown-menu dropdown-menu-end" >
                                <li>
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        
                            <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                 <img src=" {{Auth::user()->getMedia('avatars')->first()->getUrl('thumb');}}" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                            </div>
                            <div class="flex-grow-1">
                             @role('Gerente')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }} </span>
                            
                            @endrole
                            @role('Gerente Ventas')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                           @role('Reservaciones')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                            @role('Verificacion')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            
                            @endrole
                            @role('Administrador')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            @endrole
                            @role('Ventas')
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            @endrole
                            @role('Distribuidor')
                            <span class="fw-semibold d-block">{{ Auth::user()->distribuidore->representantelegal }}</span>

                            @endrole
                               
                            
                            
                                    </a>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                       
                                    <a class="dropdown-item" href="{{ route('perfil') }}">
                                        <i class="bx bx-user me-2"></i>
                                        {{ __('Mi perfil') }}</a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                     <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        <i class="bx bx-power-off me-2"></i>
                                        Cerrar Sesion</a>
                                    </li>
                        </ul>
                        </li>
                         </ul>
                </div>
                
              
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf

                                    </form>
          </nav>


          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


    <!-- / aqui se vera el contenido ajax por wilvive -->
    <main>
            @yield('content')
    </main>
       
   
          

            <!-- / Footer -->
            <footer class="content-footer footer">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      &copy;
      <script>
        document.write(new Date().getFullYear());
      </script>
      Prefence Passport
    </div>
    <div>
      <a href="#" target="_blank" class="footer-link me-4">
        <i class="menu-icon tf-icons bx bx-support"></i> Soporte
      </a>
    </div>
  </div>
</footer>
            <div class="content-backdrop fade"></div>
 
          <!-- Content wrapper -->
                        <div class="layout-overlay layout-menu-toggle"></div>

        </div>
        <!-- / Layout page -->

      </div>

      <!-- Overlay -->

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

  </body>
</html>
    @livewireScripts


<!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script>
        window.addEventListener('load', init, false);
        function init() {
            let div = document.querySelector('#ocultar-y-mostrar');
            div.style.visibility = 'visible';
            let boton = document.querySelector('#ocultar-mostrar');
            boton.addEventListener('click', function (e) {
                if(div.style.visibility === 'visible'){
                    div.style.visibility = 'hidden';
                }else{
                    div.style.visibility = 'visible';
                }
            }, false);
        }
    </script>

    <script type="text/javascript">
      $(function(){
    $(".validar").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});
    </script>
     <!--Edades-->
        <script type="text/javascript">
 $(function(){

  $("#mySelect").change(function(){
  var cantidad =$("#mySelect").val();
    $("#myInput").val(cantidad);
    RenderInputs(cantidad);
  });
  
  $("#myInput").change(function(){
  var cantidad = $("#myInput").val();
    $("#mySelect").val(cantidad);
    RenderInputs(cantidad);
  });

});

function RenderInputs(cantidad){
$('#content').html('');
  for (var i = 0; i < cantidad; i++) {
  $('#content').append('<div class="col-6 input-group input-group-merge">');
        $('#content').append('<label class="form-label"> Edad ' + (i+1) + '</label>');
        $('#content').append('<input class="form-control" type="text" id="input'+(i+1)+'" name="edades[]"/>');
        $('#content').append('</div>');
  }

}
</script>
 <!--Control de modals que muestran laimagen en worksheet-->
      <script>
function abreModalImagen(elementoImg)
{
  let modal = document.getElementById("modal");
  let imagenModal = document.getElementById("miImagenModal");
  imagenModal.src = elementoImg.src;
  modal.style.display = 'block';
  
}

function cerrarModalImagen(get)
{

//console.log(this)
$('#modal').modal('toggle');
$('#modal').modal('hide');


}
       </script>
 <script type="text/javascript">
function cargarImagen(get) {
var inputClonado = $("#"+ id1).clone();
inputClonado.attr('id', 'idc');
inputClonado.attr('name', 'comprovante');
}    



 </script>
    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

    <script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <!-- Page JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   
