@extends('layouts.app')

@section('template_title')

@endsection

@section('content')
                  @if($worksheet->calificacion != 'NQ')
                  <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> WORKSHEET - Q</h4>
                  @endif
                  @if($worksheet->calificacion === 'NQ')
                  <h4 class="fw-bold py-3 mb-4"> <i class="bx bx-user me-1"></i> WORKSHEET - NQ</h4>
                  @endif

<form method="POST" action="{{ route('worksheetUpdate', $lead->id) }}"  role="form" enctype="multipart/form-data">
  {{ method_field('PATCH') }}
  @csrf
  <div class="">
    <div class="col-md-12">

      @includeif('partials.errors')

      <div class="card card-default">


        <div class="card-body">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif

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
                          <input readonly class="form-control" type="text" name="leads_id" value="{{$lead->id}}" />

                        </div>
                        <div class="mb-3 col-md-1">
                          <label class="form-label">REGISTRO:</label>
                          <input readonly class="form-control" type="text" name="date" value="{{$date}}" />

                        </div>
                        <div class="mb-3 col-md-2">
                          <label class="form-label">VENDEDOR:</label>
                          <input readonly class="form-control" type="text" name="vendedor" value="{{ Auth::user()->name }}" />

                        </div>
                        @if($cerradores)
                        <div class="mb-3 col-md-2">
                          <label class="form-label">Cerrador:</label>
                          <input readonly class="form-control" type="text" name="cerrador_id" value="{{$cerradores->name}}" />


                        </div>
                        @endif
                        <div class="mb-4 col-md-2">
                          <label class="form-label">STATUS:</label>
                          <div class="input-group input-group-merge">
                            <select class="form-select " name="statuses_id" id="statuses_id">
                              <option value="{{$lead->statuses_id}}" >{{$statuses->nombre}}</option> 
                              
                               @role('Reservaciones')
                              <option value="21" >Abiertas</option>
                              <option value="13" >Documentos Pendientes</option>
                              <option value="14" >Suspendida</option>
                              <option value="15" >Rechazada Por Hotel</option>
                              <option value="16" >Calcelada</option>
                              <option value="17" >Solicitada</option>
                              <option value="18" >Pago De Fee Pendiente</option>
                              <option value="19" >Pre Confirmada</option>
                              <option value="20" >Confirmada</option>
                              @endrole
                              @role('Verificacion')
                              @if($lead->statuses_id != 12)
                              <option value="8" >Nueva</option>
                              <option value="9" >No Venta</option>
                              <option value="10" >Venta</option>
                              <option value="11" >Documentos Pendientes</option>
                              <option value="12" >Documentos Completos</option>
                              @endif
                              

                              @if($lead->statuses_id == 12)
                             
                              <option value="13" >Confirmada</option>
                              @endif
                              @endrole
                              @role('Ventas')
                              <option value="8" >Verificacion</option>

                              @endrole
                                    @role('Administrador')
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
                              @endrole

                            </select>



                          </button>



                        </div>
                      </small>
                      

                    </div>
                  </form>
                    <select hidden class="form-select" id="exampleFormControlSelect1" value="$worksheet->calificacion" name="calificacion">
                      <option value="{{$worksheet->calificacion}}">{{$worksheet->calificacion}}</option>

                    </select>

                
                    <div class="mb-3 col-md-1">
                    <label class="form-label">CALIF:</label>
                    <select class="form-select" id="exampleFormControlSelect1" value="$worksheet->calificacion" name="calificacion">
                      <option value="{{$worksheet->calificacion}}">{{$worksheet->calificacion}}</option>
                      <option selected value="Q">Q</option>
                      <option value="NQ">NQ</option>
                    </select>
                  </div>
              


                
                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">Plataforma</label>
                    <div class="input-group input-group-merge">
                      <input type="text" class="form-control" value="{{$worksheet->plataforma}}" name="plataforma"/>
                    </div>
                  </div>
                 

                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">booking</label>
                    <div class="input-group input-group-merge">



                      <input type="text" class="form-control" value="{{$worksheet->booking}}" name="booking"/>

                    </div>
                  </div>

                  <div class="mb-3 col-md-2">
                    <label class="form-label" for="phoneNumber">FECHA DE COMPRA:</label>
                    <div class="input-group input-group-merge">
                     <input class="form-control"  value="{{$worksheet->created_at}}" readonly id="html5-date-input" />
                   </div>
                 </div>
                 <div class="mb-3 col-md-2">
                   <label class="form-label" for="basic-icon-default-fullname">titular</label>
                   <div class="input-group input-group-merge">

                    <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$lead->nombre}}"  autocomplete="nombre"  placeholder = 'nombre completo'>

                    {!! $errors->first('nombre', '<div class="invalid-feedback">El campo Nombre es obligatorio.</div>') !!}
                  </div>
                </div>

                <div class="mb-3 col-md-2">
                  <label class="form-label">Edad:</label>
                  <input id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" type="text"  class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{$lead->edad}}"  autocomplete="edad"  placeholder = 'edad'>

                  {!! $errors->first('nombre', '<div class="invalid-feedback">El campo edad es obligatorio.</div>') !!}

                </div>
                <div class="mb-3 col-md-3">
                  <label  class="form-label">OCUPACIÓN:</label>
                  <input class="form-control" type="text" value="{{$worksheet->ocupaciont}}" name="ocupaciont"  />
                </div>
                <div class="mb-3 col-md-2">
                  <label  class="form-label">ESTADO CIVIL:</label>
                  <select class="form-select" id="exampleFormControlSelect1" name="estadocivil">
                    <option selected  value="{{$lead->estadocivil}}">{{$lead->estadocivil}}</option>
                    <option value="Casado (a)">Casado (a)</option>
                    <option value="Soltero">Soltero (a)</option>
                    <option value="Union Libre">Union Libre</option>
                    <option value="Viudo">Viudo (a)</option>
                  </select>
                </div>
                @if($worksheet->calificacion === 'Q')
                <div class="mb-3 col-md-5">
                  <label class="form-label">Cotitular:</label>
                  <input class="form-control" type="text" id="name" value="{{$worksheet->nombrec}}" name="nombrec"/>
                </div>
                <div class="mb-3 col-md-2">
                  <label class="form-label">Edad:</label>
                  <input class="form-control" type="text" value="{{$worksheet->edadc}}" name="edadc" />
                </div>
                <div class="mb-3 col-md-3">
                  <label  class="form-label">OCUPACIÓN:</label>
                  <input class="form-control" type="text" value="{{$worksheet->ocupácionc}}" name="ocupaciontc"/>
                </div>
                <div class="mb-3 col-md-2">
                  <label  class="form-label">ESTADO CIVIL:</label>
                  <select class="form-select" id="exampleFormControlSelect1"  name="estadocivilc">
                    <option selected  value="{{$worksheet->estadocivilc}}">{{$worksheet->estadocivilc}}</option>
                    <option value="Casado (a)">Casado (a)</option>
                    <option value="Soltero (a)">Soltero (a)</option>
                    <option value="Union Libre">Union Libre</option>
                    <option value="Viudo (a)">Viudo (a)</option>
                  </select>
                </div>

                <div class="mb-3 col-md-3">
                  <label class="form-label">INGRESOS:</label>
                  <input type="text" class="form-control" value="{{$worksheet->ingresos}}" name="ingresos"/>
                </div>
                <div class="mb-3 col-md-3">
                 <label class="form-label">TARJETAS:</label>
                 <input class="form-control" type="text" value="{{$worksheet->tarjetas}}" name="tarjetas" />
               </div>
               @endif
               <div class="mb-3 col-md-3">
                <label class="form-label">TELEFONO 1:</label>
                <input class="form-control" type="text" id="phoneNumber" name="telefono1" value="{{$lead->telefono1}}"/>
              </div>
              <div class="mb-3 col-md-3">
                <label for="zipCode" class="form-label">TELEFONO 2:</label>
                <input type="text" class="form-control" id="phoneNumber" name="telefono2" value="{{$lead->telefono2}}"/>
              </div>

              <div class="mb-3 col-md-3">
                <label class="form-label">CORREO ELECTRONICO:</label>
                <input type="email" class="form-control" id="emeal" name="correo" value="{{$lead->correo}}"/>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label" for="country">PAÍS:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="country" class="form-control" name="pais" value="{{$lead->pais}}"/>
                </div>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label" for="phoneNumber">CIUDAD:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="city"  class="form-control" value="{{$worksheet->ciudad}}" name="ciudad"/>
                </div>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label">C.P:</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="zipcode" class="form-control" maxlength="6" value="{{$worksheet->cp}}" name="cp"/>
                </div>
              </div>

              <hr class="my-0" />
              <h5 class="card-header">DATOS DE RESERVA</h5>
              <div class="mb-3 col-md-2">
                <label class="form-label">DESTINO:</label>
                <input class="form-control" type="text" value="{{$ddr->destino}}" name="destino"  />
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label">HOTEL:</label>
                <input class="form-control" type="text" name="hotel" value="{{$ddr->hotel}}" />
              </div>
              @if($ddr->fecha_entrada == null)
              <div class="mb-4 col-md-2">
                <label class="form-label" for="phoneNumber">TIPO DE FECHA:</label> <br>
                <input class="form-input" type="radio" name="fecha" />
                <label class="form-label" for="flexSwitchCheckDefault">Fecha Cerrada</label> <br>
                <input class="form-input" t
                ype="radio" name="fecha" type="radio"  id="ocultar-mostrar"/>
                <label class="form-label" for="flexSwitchCheckDefault">Fecha Abirta</label> <br>


              </div>
              @endif
              <div class="mb-3 col-md-1">
                <label class="form-label">#NOCHES:</label>
                <select class="form-select" name="noches"  id="exampleFormControlSelect1">
                  <option selected value="{{$ddr->noches}}">{{$ddr->noches}}</option>
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
                   <input class="form-control" type="date" value="{{$ddr->fecha_entrada}}" name="fecha_entrada"id="html5-date-input" />
                 </div>
               </div>
               <div class="col-md-5" style="float: right; margin-top: -60px;">
                <label class="form-label" for="phoneNumber">CHECK OUT:</label>
                <div class="input-group input-group-merge">
                 <input class="form-control" type="date" value="{{$ddr->fecha_salida}}" name="fecha_salida" id="html5-date-input" />
               </div>
             </div>
           </div>


           <div class="mb-3 col-md-3">
            <label class="form-label">HABITACIONES:</label>
            <input class="form-control" type="text" value="{{$ddr->habitaciones}}" name="habitaciones" />
          </div>
          <div class="mb-3 col-md-3">
            <label class="form-label">TIPO DE HABITACIÓN:</label>
            <input class="form-control" type="text" value="{{$ddr->tipo_habitacion}}" name="tipo_habitaciones" />
          </div>
          <div class="mb-3 col-md-1">
            <label class="form-label" for="phoneNumber">ADULTOS:</label>
            <select class="form-select" name="adultos" id="exampleFormControlSelect1">
              <option selected value="{{$ddr->adultos}}">{{$ddr->adultos}}</option>
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
              <option value="{{$ddr->menores}}">{{$ddr->menores}}</option>
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
              <input type="text" class="form-control" name="plan" value="{{$ddr->plan}}" />
            </div>
                <select hidden id="smallSelect" class="form-select form-select-sm" name="moneda" >
                    
                    
                    <option selected  value="{{$worksheet->moneda}}">{{$worksheet->moneda}}</option>
                   

                  </select>
          </div>
          <hr>
          <!-- Merged -->
       
        
         <div class="col-md-6">
            <div class=" mb-4">
              <h5 class="card-header">DATOS DE TARIFAS
                <small class="text-muted float-end">Moneda
                  <select id="smallSelect" class="form-select form-select-sm" name="moneda">
                    
                    
                    <option selected  value="{{$worksheet->moneda}}">{{$worksheet->moneda}}</option>
                   
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

                    class="form-control @error('costo_total') is-invalid @enderror"
                    value="{{$ddp->costo_total}}"/>

                    <span class="input-group-text">.00</span>
                    @error('costo_total')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ 'campo obligatorio' }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-password-toggle">
                  <label class="form-label">PACKEO AGENTE:</label>
                  <div class="input-group input-group-merge">
                   <input value="{{$ddp->pakeo_agente}}" autofocus type="text" class="form-control @error('pakeo_agente') is-invalid @enderror" id="basic-default-name"  name="pakeo_agente" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                   @error('pakeo_agente')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">ACTIVACIÓN:</label>
                <div class="input-group input-group-merge">
                 <input value="{{$ddp->activacion}}" autofocus type="text" class="form-control @error('activacion') is-invalid @enderror" id="basic-default-name"  name="activacion" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 @error('activacion')
                 <span class="invalid-feedback" role="alert">
                  <strong>{{ 'campo obligatorio' }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password32">RESORT FEE:</label>
              <div class="input-group input-group-merge">
               <input value="{{$ddp->reporte_fee}}" autofocus type="text" class="form-control @error('reporte_fee') is-invalid @enderror" id="basic-default-name"  name="reporte_fee" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
               @error('reporte_fee')
               <span class="invalid-feedback" role="alert">
                <strong>{{ 'campo obligatorio' }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">Pago Inicial:</label>
            <div class="input-group input-group-merge">
              <input value="{{$ddp->pago_inicial}}" autofocus class="form-control @error('pago_inicial') is-invalid @enderror" type="text"  name="pago_inicial" id="html5-date-input" />
              @error('pago_inicial')
              <span class="invalid-feedback" role="alert">
                <strong>{{ 'campo obligatorio' }}</strong>
              </span>
              @enderror
            </div>

          </div>

          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">PENDIENTE DE PAGO:</label>
            <div class="input-group input-group-merge">
             <input value="{{$ddp->pendiente_de_pago}}" autofocus type="text" class="form-control @error('pendiente_de_pago') is-invalid @enderror" id="basic-default-name"  name="pendiente_de_pago" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
             @error('pendiente_de_pago')
             <span class="invalid-feedback" role="alert">
              <strong>{{ 'campo obligatorio' }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-password-toggle">
          <label class="form-label">CONCEPTO:</label>
          <div class="input-group input-group-merge">
           <input value="{{$ddp->concepto}}" autofocus type="text" class="form-control @error('concepto') is-invalid @enderror" id="basic-default-name"  name="concepto" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
           @error('concepto')
           <span class="invalid-feedback" role="alert">
            <strong>{{ 'campo obligatorio' }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-password-toggle">
        <label class="form-label" for="basic-default-password32">FECHA LIMITE DE PAGO:</label>
        <div class="input-group input-group-merge">
          <input value="{{$ddp->fecha_limite}}" autofocus class="form-control @error('fecha_limite') is-invalid @enderror" type="date"  name="fecha_limite" id="html5-date-input" />
          @error('fecha_limite')
          <span class="invalid-feedback" role="alert">
            <strong>{{ 'campo obligatorio' }}</strong>
          </span>
          @enderror
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

             @if($fdp->banco )
            <input checked class="form-check-input " name="forma_pago"   type="radio" value="NuevaTarjeta" />
            Nueva Tarjeta
            @else
            
            <input class="form-check-input " name="forma_pago"   type="radio" value="NuevaTarjeta" />
            Nueva Tarjeta

            @endif
    
            <div class="collapse.show" id="collapseExample3" style="background-color: #fff !important;">
              <br>
              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">BANCO:</label>
                <div class="input-group input-group-merge">
                  <input type="text" value="{{ $fdp->banco }}" name="banco" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                </div>
              </div>
              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">TITULAR:</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="@error('titular') is-invalid @enderror" value="{{ $fdp->titular }}" name="titular" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                  @error('titular')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              @if($fdp->afiliacion == 'MC')
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
              @endif

              @if($fdp->afiliacion == 'VISA')
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
              @endif

              @if($fdp->afiliacion == 'AMEX')
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
              @endif

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">16 DIGITOS:</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="@error('digitos') is-invalid @enderror" maxlength="16"  value="{{ $fdp->digitos }}" name="digitos" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                  @error('digitos')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="mb-3 col-md-7">
                <label class="form-label">VIGENCIA:</label>
                <div class="input-group">
                  <input type="text" class="form-control validar @error('vigencia') is-invalid @enderror"  value="{{ $fdp->vigencia }}" name="vigencia" maxlength="5">
                  @error('vigencia')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
              <div class="mb-3 col-md-4" style="float: right; margin-top:-68px !important;">
                <label class="form-label">CVV:</label>
                <input class="form-control validar @error('CVV') is-invalid @enderror" value="{{ $fdp->CVV }}"  name="CVV" type="text" maxlength="4"/>
                @error('CVV')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ 'campo obligatorio' }}</strong>
                </span>
                @enderror
              </div>
              <div>
               <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
               <input class="form-control @error('nota') is-invalid @enderror" type="textarea" name="nota"  value="{{$fdp->nota}} "  rows="3"></input>
               @error('nota')
               <span class="invalid-feedback" role="alert">
                <strong>{{ 'campo obligatorio' }}</strong>
              </span>
              @enderror
            </div>

          </div>
        </label>

        <label class="list-group-item">
            @if($ddp->forma_de_pago != 'Transferencia' or $ddp->forma_de_pago === 'PagoenLinea' or $ddp->forma_de_pago === '')
          <input  class="form-check-input @error('forma_pago') is-invalid @enderror"  value="Transferencia" name="forma_pago" type="radio" />
          Transferencia
         
          @endif
          @if($ddp->forma_de_pago === "Transferencia")
          <input checked   class="form-check-input @error('forma_pago') is-invalid @enderror"  value="Transferencia" name="forma_pago" type="radio"  />
          Transferencia
          @error('forma_pago')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong></span> @enderror
          @endif
        </label>
        <label class="list-group-item">
          @if($ddp->forma_de_pago === 'PagoenLinea')
          <input checked   class="form-check-input @error('forma_pago') is-invalid @enderror"  value="PagoenLinea" name="forma_pago" type="radio" />
          Pago en Linea
          @else           
          <input  class="form-check-input @error('forma_pago') is-invalid @enderror"  value="PagoenLinea" name="forma_pago" type="radio" />
          Pago en Linea
          @endif
        </label>
      </div>
    </div>
     </div>
      </div>
</div>

 

  @if($ddp->costo_total)
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
    @if($worksheet->moneda == 'mxm')
      <td>{{ ++$i }}</td>
      <td>{{ $ddp->id }}</td>
      <td>$ {{ $ddp->costo_total }} MXM </td>
      <td>$ {{ $ddp->pakeo_agente }} MXM </td>
      <td>$ {{ $ddp->activacion }} MXM </td>
      <td>$ {{ $ddp->reporte_fee }} MXM </td>
      <td>$ {{ $ddp->pago_inicial }} MXM </td>
      <td>$ {{ $ddp->pendiente_de_pago }} MXM </td>
      <td> {{ $ddp->created_at}}</td>
    @switch($ddp->forma_de_pago)
    @case('PagoenLinea')
        <td>{{'Pago en linea' }}</td>
        @break
    @case('Transferencia')
        <td>{{'Transferencia' }}</td>
        @break
    @default
    <td>{{'**** **** **** **** '}}{{substr( $ddp->forma_de_pago, -4);}}</td>
        @break
    @endswitch
         @if($ddp->comprovante)
      <td><img width=40px onclick="abreModalImagen(this)" src="{{ $ddp->getMedia('comprovantes')->first()->getUrl();}}"></td>
      <td>      
     @else
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input   name="idt" value="{{ $ddp->id }}"> 
            <input  autofocus type="file" id="avatarFile" name="comprovantet" class="account-file-input "    accept="image/png, image/jpeg" />
            </input>
          </label>
        </div>
  </td>
  </td>
     @endif
     @endif
     @if($worksheet->moneda == 'usd')
      <td>{{++$i}}</td>
      <td>{{$ddp->id}}</td>
      <td>${{ $ddp->costo_total }} USD</td>
      <td>${{ $ddp->pakeo_agente }} USD</td>
      <td>${{ $ddp->activacion }} USD</td>
      <td>${{ $ddp->reporte_fee }} USD</td>
      <td>${{ $ddp->pago_inicial }} USD</td>
      <td>${{ $ddp->pendiente_de_pago }} USD</td>
      <td> {{ $ddp->created_at}}</td>
    @switch($ddp->forma_de_pago)
    @case('PagoenLinea')
        <td>{{'Pago en linea' }}</td>
        @break
    @case('Transferencia')
        <td>{{'Transferencia' }}</td>
        @break
    @default
    
    <td>{{'**** **** **** ****  '}}{{substr( $ddp->forma_de_pago, -4);}}</td>
        @break
    @endswitch
     @if($ddp->comprovante)
      <td><img width=40px onclick="abreModalImagen(this)" src="{{ $ddp->getMedia('comprovantes')->first()->getUrl();}}"></td>
      <td>      
     @else
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class=" me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input  hidden  name="idt" value="{{ $ddp->id }}"> </input>
            <input  autofocus  type="file" id="avatarFile" name="comprovantet" class="account-file-input "    accept="image/png, image/jpeg"/>
          </label>
        </div>
  </td>
  </td>
     @endif
      @endif 
    </tr>
    
  </tbody>
</table>
<hr>
</div>
@endif

 <!--historial de pagos-->
@if($ddpm->fecha_de_pago)
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
      @foreach ($ddp3 as $pago)
      <tr>
        <td>{{ ++$i }}</td>
        <td name="idp">{{ $pago->id }}</td>
        <td>{{ $pago->fecha_de_pago }}</td>
         @if($worksheet->moneda == 'mxm')
         <td>${{ $pago->cantidad }} MXM</td>
     @endif
     @if($worksheet->moneda == 'usd')
      <td>${{ $pago->cantidad }} USD</td>
     @endif
        <td>{{ $pago->concepto }}</td>
        <td>{{ $pago->status_de_pago }}</td>
        <td>{{ $pago->pago_asignado }}</td>
     @switch($pago->forma_de_pago)
    @case('PagoenLinea')
        <td>{{'Pago en linea' }}</td>
        @break
    @case('Transferencia')
        <td>{{'Transferencia' }}</td>
        @break
    @default
    <td>{{'**** **** **** ****  '}}{{substr( $pago->forma_de_pago, -4);}}</td>
        @break
    @endswitch
        <td>{{ $pago->num_aprovacion }}</td>
     @if($pago->comprovante)
      <td><img width=40px onclick="abreModalImagen(this)" src="{{ $pago->getMedia('comprovantes')->first()->getUrl();}}"></td>
      <td>      
     @else
      <td>
        <div class="button-wrapper">
          <label for="avatarFile" class=" me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Subir Comprobante</span>
            <input  autofocus  type="file" id="avatarFile" name="comprovantel[{{ $pago->id }}]" class="account-file-input "    accept="image/png, image/jpeg"/>
          </label>
        </div>

  </td>
  </td>
     @endif
        <td>
        </td>
      </tr>
      @endforeach
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
 @endif


<div  style="background-color: #fff !important;">
  <div class="d-grid d-sm-flex p-3" >

   <!-- Merged -->
   
   
   @hasrole('Administrador|Gerente|Verificacion')
   
   <div class="col-md-6">
    <div class=" mb-4">
      <h5 class="card-header">REALIZAR UN PAGO


        <div class="card-body demo-vertical-spacing demo-only-element">
          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password32">FECHA DE PAGO:</label>
            <div class="input-group input-group-merge">
              <input class="form-control validar @error('fecha_de_pago2') is-invalid @enderror" value="{{ old('fecha_de_pago2') }}" type="date" name="fecha_de_pago2"  id="html5-date-input" />
              @error('fecha_de_pago2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror
              </div>
            </div>
            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password32">CANTIDAD:</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">$</span>
                <input
                type="text"
                name="cantidad2"
                class="form-control @error('cantidad2') is-invalid @enderror"
                value="{{ old('cantidad2') }}" 
                aria-label="Cantidad (en dolares)" 
                /><span class="input-group-text">.00</span>@error('cantidad2')<span class="invalid-feedback " role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror
                </div>
              </div>

              <div class="form-password-toggle">
                <label class="form-label">CONCEPTO:</label>
                <div class="input-group input-group-merge">
                 <input name="conceptop2" type="text" class=" @error('conceptop2') is-invalid @enderror" value="{{ old('conceptop2') }}" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 @error('conceptop2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror                                   
                 </div>
               </div>

               <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">ESTATUS DE PAGO:</label>
                <div class="input-group input-group-merge">
                 <select   name="status_de_pago2" class="form-select  @error('status_de_pago2') is-invalid @enderror" >
                  <option value="{{ old('status_de_pago2') }}">{{ old('status_de_pago2') }}</option>
                  <option value="pendiente de pago">Pendiente de Pago</option>
                  <option value="pagado">Pagado</option>
                  <option value="devolucion">Devolución</option>
                </select>
                @error('status_de_pago')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror
                </div>

              </div>

              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">PAGO ASIGNADO A:</label>
                <div class="input-group input-group-merge">
                 <input type="text" class=" @error('pago_asignado2') is-invalid @enderror" value="{{ old('pago_asignado2') }}" name="pago_asignado2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 @error('pago_asignado2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror
                 </div>
               </div>

               <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password32">No. DE APROVACION:</label>
                <div class="input-group input-group-merge">
                 <input type="text" class=" @error('num_aprovacion2') is-invalid @enderror" value="{{ old('num_aprovacion2') }}" name="num_aprovacion2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                 @error('num_aprovacion2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong>@enderror

                 </div>
                 <div>
                   <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
                   <textarea class="form-control " name="notap2" value="{{old('notap2') }}" id="exampleFormControlTextarea1" rows="3"></textarea>

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
             @if($fdpl2->id)  
                    @foreach ($fdpl as $forma)
                      @foreach ($ddpl as $formad)
                        @if($formad->id === $forma->detalles_de_pagos_id)
                         <tr>
                         <!--colappse cuando ya existen pagos-->
                         <td class="mb-3 col-md-1" ><input class="form-check-input @error('formaPago2') is-invalid @enderror" type="radio" name="formaPago2"  value="{{$forma->digitos}}" />
                           @error('formaPago2')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ 'campo obligatorio' }}</strong>
                          </span>
                        @enderror</td>
                        <td><span> <i class='bx bx-show-alt me-1' data-bs-toggle="collapse"
                          data-bs-target="#collapseExample4{{$i}}"aria-expanded="true"></i></span>
                          <div class="collapse" id="collapseExample4{{$i}}">
                            <br>
                            <div class="form-password-toggle">
                              <label class="form-label" >BANCO:</label>
                              <div class="input-group input-group-merge">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->banco}}
                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">TITULAR:</label>
                              <div class="input-group input-group-merge">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->titular}}
                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">AFILIACION:</label>
                              <div class="form-check form-check-inline mt-2">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->afiliacion}}
                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label" >16 Digitos:</label>
                              <div class="form-password-toggle">
                                <label type="text" id="basic-default-name"  style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->digitos}}
                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">VIGENCIA:</label>
                              <div class="input-group">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->vigencia}}
                              </div>
                            </div>
                            <div class="form-password-toggle">
                              <label class="form-label">CVV:</label>
                              <div class="form-password-toggle" style="float: right; margin-top:-68px !important;">
                                <label type="text" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                                {{$forma->CVV}}
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="mb-3 col-md-5" >{{'**** **** **** **** '}}{{substr( $forma->digitos, -4); }} </td>
                      </tr>

                        @endif
                        @endforeach
                        @php
                        $i++;
                        @endphp
                       
                           
                        
                       
                      @endforeach
                      
                     
                      @endif
                    </tbody>
                  </table>
                  <label class="list-group-item">
                    <input class="form-check-input @error('formaPago2') is-invalid @enderror" type="radio" name="formaPago2" value="nuevatarjeta2" id="inlineRadio1" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample3"
                    aria-expanded="true"
                    @if((!old() && $myDefault= false) || old('formaPago2') == 'nuevatarjeta') checked="checked" @endif
                    />
                    @error('formaPago2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ 'campo obligatorio' }}</strong>
                    </span>
                    @enderror
                    Nueva Tarjeta

                    <div class="collapse" id="collapseExample3" style="background-color: #fff !important;">
                      <br>
                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">BANCO:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="@error('banco2') is-invalid @enderror" value="{{ old('banco2') }}" name="banco2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          @error('banco')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ 'campo obligatorio' }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">TITULAR:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="@error('titular2') is-invalid @enderror" value="{{ old('titular2') }}" name="titular2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          @error('titular2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ 'campo obligatorio' }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-3 col-md-8">
                        <label class="form-label">AFILIACION:</label><br>
                        <div class="form-check form-check-inline mt-2">
                          <input class="form-input @error('afiliacion2') is-invalid @enderror" type="radio" value="VISA" name="afiliacion2" id="inlineRadio1" />
                          @error('afiliacion2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong></span> @enderror
                          <label class="form-label" for="inlineRadio1">VISA</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-input @error('afiliacion2') is-invalid @enderror" type="radio" value="MC" name="afiliacion2" id="inlineRadio2" />
                          @error('afiliacion2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong></span> @enderror

                          <label class="form-label" for="inlineRadio2">MC</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-input @error('afiliacion2') is-invalid @enderror" type="radio" value="AMEX" name="afiliacion2"  id="inlineRadio3" />
                          @error('afiliacion2')<span class="invalid-feedback" role="alert"><strong>{{ 'campo obligatorio' }}</strong></span> @enderror
                          <label class="form-label" for="inlineRadio2">AMEX</label>
                        </div>

                      </div>

                      <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">16 DIGITOS:</label>
                        <div class="input-group input-group-merge">
                          <input type="text" class="@error('digitos2') is-invalid @enderror" maxlength="16"  value="{{ old('digitos2') }}" name="digitos2" id="basic-default-name" style="border-bottom: solid 1px #ccc !important; border: none; border-radius: none; width: 100%;"/>
                          @error('digitos2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-3 col-md-7">
                        <label class="form-label">VIGENCIA:</label>
                        <div class="input-group">
                          <input type="text" class="form-control validar @error('vigencia2') is-invalid @enderror" value="{{ old('vigencia2') }}" name="vigencia2" maxlength="5">
                          @error('vigencia2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ 'campo obligatorio' }}</strong>
                          </span>
                          @enderror

                        </div>
                      </div>
                      <div class="mb-3 col-md-4" style="float: right; margin-top:-68px !important;">
                        <label class="form-label">CVV:</label>
                        <input class="form-control validar @error('CVV2') is-invalid @enderror" value="{{ old('CVV2') }}"  name="CVV2" type="text" maxlength="4"/>
                        @error('CVV2')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ 'campo obligatorio' }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div>
                       <label for="exampleFormControlTextarea1" class="form-label">NOTAS:</label>
                       <textarea class="form-control @error('nota2') is-invalid @enderror" name="nota2" value="{{ old('nota2') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
                       @error('nota2')
                       <span class="invalid-feedback" role="alert">
                        <strong>{{ 'campo obligatorio' }}</strong>
                      </span>
                      @enderror
                    </div>

                  </div>
                </label>
                
                <label class="list-group-item">
                  <input class="form-check-input me-1 @error('formaPago2') is-invalid @enderror" type="radio" value="Transferencia" name="formaPago2" data-bs-toggle="collapsing" data-bs-target="#collapseExample3" aria-expanded="true"  id="inlineRadio2" data-parent="#selector"
                  @if((!old() && $myDefault= false) || old('formaPago2') == 'Transferencia') checked="checked" @endif
                  />
                  @error('formaPago2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror
                  Transferencia
                </label>


                <label class="list-group-item">
                  <input class="form-check-input me-1 @error('formaPago2') is-invalid @enderror" type="radio" value="PagoenLinea" name="formaPago2" hidden-bs-collapse="collapse" data-bs-target="#collapseExample3" aria-expanded="true"  id="inlineRadio3" data-parent="#selector"
                  @if((!old() && $myDefault= false) || old('formaPago2') == 'PagoenLinea') checked="checked" @endif/>
                  @error('formaPago2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ 'campo obligatorio' }}</strong>
                  </span>
                  @enderror
                  Pago en Linea
                </label>

              </div>

            </div>
            <div class="row mb-3">
              <p>Comporbante de cargo</p>
              <div class="col-md-12">
               <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                src="{{asset('assets/img/avatars/1.png')}}"
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

                    class="account-file-input @error('comprovante22') is-invalid @enderror"
                    hidden
                    accept="image/png, image/jpeg"
                    />
                    @error('comprovante22')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ 'campo obligatorio' }}</strong>
                    </span>
                    @enderror

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
                
                         @if($worksheet->moneda == 'usd')
                        <h5 class="card-header" style="float:left;">Balance: $ {{ $CostoTotal }} USD </h5>

                        @endif

                         @if($worksheet->moneda == 'mxm')
                        <h5 class="card-header" style="float:left;">Balance : $ {{ $CostoTotal }} MXM </h5>
                        @endif
                       
                        
                        @endhasrole
          

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


@endsection