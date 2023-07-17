@extends('layouts.app')

@section('template_title')
    Lead
@endsection

@section('content')
    

        

          <!-- / Navbar -->

          <!-- Content wrapper -->
         
            <!-- Content -->

        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                            @role('Verificacion')
                            <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                            @endrole
                            @role('Gerente')
                            <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                            @endrole
                                                         @role('Gerente Ventas')
                            <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                            @endrole
                                                         @role('Reservaciones')
                            <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                            @endrole
                             @role('Administrador')
                            <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                            @endrole
                            @role('Ventas')
                           <h5 class="card-title text-primary">Bienvenido (a) {{ Auth::user()->name }}! 🎉</h5>
                           @endrole
                           @role('Distribuidor')
                           <h5 class="card-title text-primary"> Bienvenido (a)  {{ Auth::user()->distribuidore->representantelegal }} ! 🎉</h5>
                            @endrole
                          <p class="mb-4">
                            Vacation Cards la tarjeta de vacaciones #1 en el mundo.
                          </p>

                          <!-- Button trigger modal -->


                        
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="card-body">
                <div class="row">
                <!-- Bootstrap carousel -->
                <div class="col-md">
  <h5 class="my-4 text-primary fs-4">🏆 Calidad y Servicio</h5>

  <p class="fs-5">En <b>Preference Passport</b>, nos esforzamos por crear una experiencia que supere todas las expectativas del viajero mientras disfruta de unas vacaciones de ensueño. Nuestro equipo de travel concierge está apasionado y dedicado al servicio al cliente, convirtiendo cada momento en algo especial que recordarán de por vida.</p>
  <p class="fs-5">Te ayudaremos a descubrir las increíbles amenidades incluidas en nuestros hermosos destinos de playa en hoteles de 5 y 4 estrellas en México, el Caribe y América Central. Así podrás elegir dónde serán tus próximas vacaciones.</p>
</div>
                <!-- Bootstrap crossfade carousel -->
                <div class="col-md">
                 
                 <div
                    id="carouselExample-cf"
                    class="carousel carousel-dark slide carousel-fade"
                    data-bs-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/elements/slide1.jpg" alt="First slide" style="border-radius: 7px;"/>
                        
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/elements/slide2.jpg" alt="Second slide" style="border-radius: 7px;"/>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/elements/slide3.jpg" alt="Third slide" style="border-radius: 7px;"/>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
              </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
                 <!-- porque vacations -->
              <div class="row mb-5 ">
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title"><i class='bx bxs-gift text-primary' style="font-size: 54px;"></i></h5>
                      <p class="card-text fs-5">Regalar incentivos vacacionales es un increíble beneficio.</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title"><i class='bx bx-sort-up text-primary' style="font-size: 54px;"></i></h5>
                      <p class="card-text fs-5">Para incrementar de forma exponencial las ventas de tu negocio</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title"><i class='bx bx-badge-check text-primary' style="font-size: 54px;"></i></h5>
                      <p class="card-text fs-5">Mantener la satisfacción de <br>tus consumidores</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Text alignment -->
          </div>

       

@endsection
         