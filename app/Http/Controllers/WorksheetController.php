<?php

namespace App\Http\Controllers;

use App\Models\worksheet;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Nota;
use App\Models\Cerrador;
use App\Models\datos_de_reservas;
use App\Models\Menores;
use App\Models\detalles_de_pagos;
use App\Models\forma_de_pago;
use DB;

/**
 * Class WorksheetController
 * @package App\Http\Controllers
 */
class WorksheetController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worksheets = worksheet::paginate();
        return view('worksheet.index', compact('worksheets'))
        ->with('i', (request()->input('page', 1) - 1) * $worksheets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worksheet.create', compact('worksheet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Worksheet::$rules);
        $worksheet = Worksheet::create($request->all());
        return redirect()->route('worksheet.index')
        ->with('success', 'Worksheet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $worksheet = worksheet::find($id);
        return view('worksheet.show', compact('worksheet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::find($id);
        $statuses = lead::find($id)->statuses;
        $worksheet = worksheet::where('leads_id',$lead->id)->first();
        $ddp = new detalles_de_pagos();



          // 
        $cerradores = Cerrador::where('id',$lead->cerrador_id)->first();
        $date = $lead->created_at2;
        $userrole = auth()->user()->roles()->first()->name;
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;

        if($worksheet === null){
            $worksheet = new worksheet();
            $ddr = new datos_de_reservas();
            $ddp = new detalles_de_pagos();
            $ddpm = new detalles_de_pagos();
            $ddp2 = new detalles_de_pagos();
            $ddp3 = new detalles_de_pagos();
            $fdp = new forma_de_pago();
            $fdpl = new forma_de_pago();
            $fdpl2 = new forma_de_pago();
            $menores = new Menores();
            
            $i=0;
            $CostoTotal = null;
            //var_dump($fdpl);die();
            return view('lead.worksheet-q', compact('i','CostoTotal','fdpl2','fdp','fdpl','ddp2','ddpm','ddp','ddp3','menores','ddr','worksheet','statuses','cerradores','lead','username','username2','date'));
            //var_dump('valio);die();
        }elseif($worksheet){
            $worksheet = worksheet::where('leads_id',$lead->id)->first();
            $ddp = detalles_de_pagos::where('worksheet_id',$worksheet->id)->first();
            $ddpl = detalles_de_pagos::where('worksheet_id',$worksheet->id)->get();
            $ddpm = detalles_de_pagos::where('worksheet_id',$worksheet->id)->orderBy('id', 'desc')->first();
            $ddr = datos_de_reservas::where('worksheet_id',$worksheet->id)->first();
            $ddp2 = detalles_de_pagos::where('worksheet_id',$worksheet->id)->whereNull('fecha_de_pago')->paginate();
            $ddp3 = detalles_de_pagos::where('worksheet_id',$worksheet->id)->whereNull('costo_total')->get();
            if ($fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first()) {
                $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();
                $fdpl = forma_de_pago::all();

                //var_dump($fdp.'');die();
                $fdpl2 = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();
            }else{
                $fdp =  new forma_de_pago();
                $fdpl =  new forma_de_pago();
                $fdpl2 =  new forma_de_pago();
            }
            //var_dump($ddpm->id );die();
                    $primerpago = $ddp2->first();
                    $pkeo = $primerpago->pakeo_agente;
                    $actv = $primerpago->activacion;
                    $fee = $primerpago->reporte_fee;
                    $pagoinicial = $primerpago->pago_inicial; 
                    $costo = $primerpago->costo_total;
                    $pagos = detalles_de_pagos::where('worksheet_id',$worksheet->id)->sum('cantidad');
                    $CostoTotal = $costo-$pagos-$pkeo-$actv-$fee-$pagoinicial;

            return view('lead.worksheet-q', compact('CostoTotal','fdp','fdpl2','fdpl','ddpl','ddpm','ddp3','ddp2','ddp','ddr','worksheet','statuses','cerradores','lead','username','username2','date')) ->with('i', (request()->input('page', 1) - 1) * $ddp2->perPage());

        }elseif($ddp === null && $ddr === null && $worksheet === null){
            $ddr = null;
            $ddp = null;
            $menores = null;
            $fdpl = null;
            return view('lead.worksheet-q', compact('fdpl','ddp2','ddp','menores','ddr','worksheet','statuses','cerradores','lead','username','username2','date'));;
        }elseif ($worksheet && $ddr && $ddp == null && $menores) {
           $ddp2 = null;
           $ddp = new detalles_de_pagos();
           $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();
           $fdpl = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->get();
           $CostoTotal = null;
           //var_dump($fdpl);die();
           return view('lead.worksheet-q', compact('CostoTotal','fdp','fdpl','ddp2','ddp','menores','ddr','worksheet','statuses','cerradores','lead','username','username2','date'));
       }
       elseif ($worksheet && $ddr && $ddp && $menores) {
        if ($fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first()) {
            $fdpl = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->get();
            $fdpl2 = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();  

        }else{
            $fdp = new forma_de_pago();
            $fdpl = new forma_de_pago();
            $fdpl2 = new forma_de_pago();
        }
        $ddp2 = detalles_de_pagos::where('worksheet_id',$worksheet->id)->whereNull('fecha_de_pago')->paginate();
        $ddp33 = detalles_de_pagos::where('worksheet_id',$worksheet->id)->whereNull('costo_total')->get();
        $primerpago = $ddp2->first();
        $pkeo = $primerpago->pakeo_agente;
        $actv = $primerpago->activacion;
        $fee = $primerpago->reporte_fee;
        $pagoinicial = $primerpago->pago_inicial; 
        $costo = $primerpago->costo_total;
        $pagos = detalles_de_pagos::where('worksheet_id',$worksheet->id)->sum('cantidad');
        $CostoTotal = $costo-$pagos-$pkeo-$actv-$fee-$pagoinicial;
        //var_dump($fdpl);die();
        return view('lead.worksheet-q', compact('primerpago','fdp','fdpl2','fdpl','CostoTotal','ddp33','ddp3','ddp2','ddp','menores','ddr','worksheet','statuses','cerradores','lead','username','username2','date')) ->with('i', (request()->input('page', 1) - 1) * $ddp2->perPage());
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Worksheet $worksheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lead $lead, $id)
    {


     $lead = Lead::find($id);
     $lead->nombre = $request->input('nombre');
     $lead->edad = $request->input('edad');
     $lead->estadocivil = $request->input('estadocivil');
     $lead->telefono1 = $request->input('telefono1');
     $lead->telefono2 = $request->input('telefono2');
     $lead->correo = $request->input('correo');
     $lead->pais = $request->input('pais');
     $lead->statuses_id = $request->input('statuses_id');
     $lead->update();
     $worksheet = worksheet::where('leads_id',$lead->id)->first();
     if($worksheet === null){
         $worksheet = new worksheet;
         $worksheet->ocupaciont = $request->input('ocupaciont');
     
        
     
     if($request->input('plataforma') != ""){
        $worksheet->plataforma = $request->input('plataforma');
     }
     if($request->input('localizador') != ""){
        $worksheet->localizador = $request->input('localizador');
     }
     if($request->input('nombrec')){
        $worksheet->nombrec = $request->input('nombrec');
     }
     if($request->input('edadc')){
        $worksheet->edadc = $request->input('edadc');
     }
     if($request->input('ocupaciontc')){
        $worksheet->ocupácionc = $request->input('ocupaciontc');
     }
     if($request->input('estadocivilc')){
        $worksheet->estadocivilc = $request->input('estadocivilc');
     }
     if($request->input('tarjetas')){
        $worksheet->tarjetas = $request->input('tarjetas');
     }
     if($request->input('ingresos')){
           $worksheet->ingresos = $request->input('ingresos');
     }

         $worksheet->booking = $request->input('booking');
         $worksheet->ciudad = $request->input('ciudad');
         $worksheet->cp = $request->input('cp');
         $worksheet->moneda = 'USD';
         $worksheet->calificacion = 'Q';
         $worksheet->leads_id = $request->input('leads_id');
         DB::connection(config('mysql2'))->table('mextra.leads')->insert([
        'correo' => $request->input('correo'),
        'booking' => $request->input('booking'),
        'calificacion' => $request->input('calificacion'),
        'id_lead' => $request->input('leads_id')
]);

         $worksheet->save();
     }

     
     if($request->input('calificacion')){
        $worksheet->calificacion = $request->input('calificacion');
     }
     if($request->input('plataforma') != "" ){
        $worksheet->plataforma = $request->input('plataforma');
     }
     if($request->input('localizador') != ""){
        $worksheet->localizador = $request->input('localizador');
     }
     if($request->input('nombrec')){
        $worksheet->nombrec = $request->input('nombrec');
     }
     if($request->input('edadc')){
        $worksheet->edadc = $request->input('edadc');
     }
     if($request->input('ocupaciontc')){
        $worksheet->ocupácionc = $request->input('ocupaciontc');
     }
     if($request->input('estadocivilc')){
        $worksheet->estadocivilc = $request->input('estadocivilc');
     }
     if($request->input('tarjetas')){
        $worksheet->tarjetas = $request->input('tarjetas');
     }
     if($request->input('ingresos')){
           $worksheet->ingresos = $request->input('ingresos');
     }
     $worksheet->ocupaciont = $request->input('ocupaciont');
     $worksheet->booking = $request->input('booking');
     $worksheet->ciudad = $request->input('ciudad');
     $worksheet->cp = $request->input('cp');
     $worksheet->moneda = $request->input('moneda');
        DB::connection(config('mysql2'))->table('mextra.leads')->where('id_lead', $lead->id)->update([
        'correo' => $request->input('correo'),
        'booking' => $request->input('booking'),
        'calificacion' => $request->input('calificacion')
        ]);
     $worksheet->leads_id = $request->input('leads_id');
     $worksheet->update();
     $ddr = datos_de_reservas::where('worksheet_id',$worksheet->id)->first();
     if($ddr === null){
         $ddr = new datos_de_reservas();
         $ddr->destino = $request->input('destino');
         $ddr->hotel = $request->input('hotel');
         $ddr->noches = $request->input('noches');
         $ddr->fecha_entrada = $request->input('fecha_entrada');
         $ddr->fecha_salida = $request->input('fecha_salida');
         $ddr->habitaciones = $request->input('habitaciones');
         $ddr->tipo_habitacion = $request->input('tipo_habitaciones');
         $ddr->adultos = $request->input('adultos');
         $ddr->menores = $request->input('menores');
         $ddr->plan = $request->input('plan');
         $ddr->worksheet_id = $worksheet->id;
         $ddr->save();


         //se actualiza workssheet y ddr 
         $worksheet = worksheet::where('leads_id',$lead->id)->first();
      if($request->input('calificacion')){
        $worksheet->calificacion = $request->input('calificacion');
     }
     if($request->input('plataforma') != ""){
        $worksheet->plataforma = $request->input('plataforma');
     }
     if($request->input('localizador' != "")){
        $worksheet->localizador = $request->input('localizador');
     }
     if($request->input('nombrec')){
        $worksheet->nombrec = $request->input('nombrec');
     }
     if($request->input('edadc')){
        $worksheet->edadc = $request->input('edadc');
     }
     if($request->input('ocupaciontc')){
        $worksheet->ocupácionc = $request->input('ocupaciontc');
     }
     if($request->input('estadocivilc')){
        $worksheet->estadocivilc = $request->input('estadocivilc');
     }
     if($request->input('tarjetas')){
        $worksheet->tarjetas = $request->input('tarjetas');
     }
     if($request->input('ingresos')){
           $worksheet->ingresos = $request->input('ingresos');
     }
         $worksheet->moneda = $request->input('moneda');
         $worksheet->update();
     }
    //esto esta afuera siempre se hace 
DB::connection(config('mysql2'))->table('mextra.leads')->where('id_lead', $lead->id)->update
([
        'correo' => $request->input('correo'),
        'booking' => $request->input('booking'),
        'calificacion' => $request->input('calificacion')
]);

     $ddr->destino = $request->input('destino');
     $ddr->hotel = $request->input('hotel');
     $ddr->noches = $request->input('noches');
     $ddr->fecha_entrada = $request->input('fecha_entrada');
     $ddr->fecha_salida = $request->input('fecha_salida');
     $ddr->habitaciones = $request->input('habitaciones');
     $ddr->tipo_habitacion = $request->input('tipo_habitaciones');
     $ddr->adultos = $request->input('adultos');
     $ddr->menores = $request->input('menores');
     $ddr->plan = $request->input('plan');
     $ddr->worksheet_id = $worksheet->id;
     $ddr->update();
     $menores = Menores::where('datos_de_reservas_id',$ddr->id)->first();
     if ($menores == null && $request->edades) {
         foreach($request->edades as $req){

             $menores = new Menores();
             $menores->edad = $req;
             $menores->datos_de_reservas_id = $ddr->id; 
             $menores->save();
         }
     }
 //subira imagens de cada pago
        if ($request->comprovantet){
        $idt=$request->input('idt');
        $ddpc = detalles_de_pagos::where('id',$idt)->first();
        //var_dump($request->comprovantet);die();
        $ddpc->comprovante=$request->comprovantet->getClientOriginalName();
        $ddpc->addMediaFromRequest('comprovantet')->toMediaCollection('comprovantes');
        $ddpc->update();
        
        //return redirect()->route('worksheet',$id)->with('success', ' Correctamente');
        }
   //mandamos en un arrar la lista de comporvante susamos la que viene con informacion y le agregamos el  id del detalle de pago para usarlo como key y buscarlo .
   if ($request->comprovantel) {
        foreach($request->comprovantel as $key => $value ){
        $ddpc = detalles_de_pagos::where('id',key($request->comprovantel))->first();
        $ddpc->comprovante=$value->getClientOriginalName();
        $ddpc->addMediaFromRequest('comprovantel')->toMediaCollection('comprovantes');
        $ddpc->update();
        //return redirect()->route('worksheet',$id)->with('success', ' Correctamente');
   
        }
    } 

   
            
            
        
                
            
         

 if ($ddr and !$ddp = detalles_de_pagos::where('worksheet_id',$worksheet->id)->first()) {
        $ddp = new detalles_de_pagos();
         $ddp->costo_total=$request->input('costo_total');
         $ddp->pakeo_agente=$request->input('pakeo_agente');
         $ddp->activacion=$request->input('activacion');
         $ddp->reporte_fee=$request->input('reporte_fee');
         $ddp->pago_inicial=$request->input('pago_inicial');
         $ddp->pendiente_de_pago=$request->input('pendiente_de_pago');
         $ddp->concepto=$request->input('concepto');
         $ddp->fecha_limite=$request->input('fecha_limite');

          if ($ddp->forma_de_pago=$request->input('forma_pago') == 'NuevaTarjeta') {
             $ddp->forma_de_pago=$request->input('digitos');
         }else{
            $ddp->forma_de_pago=$request->input('forma_pago');
         }

        $ddp->worksheet_id=$worksheet->id;
        $ddp->save();

         $fdp = new forma_de_pago();
         $fdp->banco=$request->input('banco');
         $fdp->titular=$request->input('titular');
         $fdp->afiliacion=$request->input('afiliacion');
         $fdp->digitos  =$request->input('digitos');
         $fdp->vigencia=$request->input('vigencia');
         $fdp->CVV=$request->input('CVV');
         $fdp->nota=$request->input('nota');
         $fdp->detalles_de_pagos_id=$ddp->id;
         $fdp->save();
  } 


if ( $request->input('fecha_de_pago2') == "" and $request->input('costo_total')) {
    

        $ddp = detalles_de_pagos::where('worksheet_id',$worksheet->id)->first(); 
    if($ddp){           
    //se actualiza detalle de pago par acaragar comprovante o modificar algun datos solo pago inicial 
        $ddp->costo_total=$request->input('costo_total');
        $ddp->pakeo_agente=$request->input('pakeo_agente');
        $ddp->activacion=$request->input('activacion');
        $ddp->reporte_fee=$request->input('reporte_fee');
        $ddp->pago_inicial=$request->input('pago_inicial');
        $ddp->pendiente_de_pago=$request->input('pendiente_de_pago');
        $ddp->concepto=$request->input('concepto');
        $ddp->fecha_limite=$request->input('fecha_limite');

        
        if ($ddp->forma_de_pago=$request->input('forma_pago') == 'NuevaTarjeta') {
            $ddp->forma_de_pago=$request->input('digitos');
            
        }else{
            $ddp->forma_de_pago=$request->input('forma_pago');
        }

        if ($request->input('forma_pago') == 'NuevaTarjeta' && $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first()) {
         $fdp->banco=$request->input('banco');
         $fdp->titular=$request->input('titular');
         $fdp->afiliacion=$request->input('afiliacion');
         $fdp->digitos  =$request->input('digitos');
         $fdp->vigencia=$request->input('vigencia');
         $fdp->CVV=$request->input('CVV');
         $fdp->nota=$request->input('nota');
         $fdp->update();
        }else{
   
        }
          $ddp->update();

        // return redirect()->route('worksheet',$id)->with('success', 'primer pago  modificado  correctamente!');
    }else{
         $ddp = new detalles_de_pagos();
         $ddp->costo_total=$request->input('costo_total');
         $ddp->pakeo_agente=$request->input('pakeo_agente');
         $ddp->activacion=$request->input('activacion');
         $ddp->reporte_fee=$request->input('reporte_fee');
         $ddp->pago_inicial=$request->input('pago_inicial');
         $ddp->pendiente_de_pago=$request->input('pendiente_de_pago');
         $ddp->concepto=$request->input('concepto');
         $ddp->fecha_limite=$request->input('fecha_limite');

          if ($ddp->forma_de_pago=$request->input('forma_pago') == 'NuevaTarjeta') {
             $ddp->forma_de_pago=$request->input('digitos');

         }else{
            $ddp->forma_de_pago=$request->input('forma_pago');
         }

        $ddp->worksheet_id=$worksheet->id;
        $ddp->save();

         $fdp = new forma_de_pago();
         $fdp->banco=$request->input('banco');
         $fdp->titular=$request->input('titular');
         $fdp->afiliacion=$request->input('afiliacion');
         $fdp->digitos  =$request->input('digitos');
         $fdp->vigencia=$request->input('vigencia');
         $fdp->CVV=$request->input('CVV');
         $fdp->nota=$request->input('nota');
         $fdp->detalles_de_pagos_id=$ddp->id;
         $fdp->save();
         //var_dump($fdp,'uno');die();
         return redirect()->route('worksheet',$id)->with('success', 'primer pago  creado  correctamente!');
    }

    
}else{
        if ($request->input('fecha_de_pago2')) {
              $request->validate([
             'fecha_de_pago2' => 'required',
             'cantidad2' => 'required',
             'conceptop2' => 'required',
             'status_de_pago2' => 'required|not_in:0',
             'pago_asignado2' => 'required',
             'num_aprovacion2' => 'required',
             'comprovante22' => '',
             'formaPago2' => 'required',

         ]);
         $ddp = new detalles_de_pagos();
         $ddp->fecha_de_pago=$request->input('fecha_de_pago2');
         $ddp->cantidad=$request->input('cantidad2');
         $ddp->concepto=$request->input('conceptop2');
         $ddp->status_de_pago=$request->input('status_de_pago2');
         $ddp->pago_asignado=$request->input('pago_asignado2');
         $ddp->num_aprovacion=$request->input('num_aprovacion2');
         if ($ddp->forma_de_pago=$request->input('formaPago2' ) == 'nuevatarjeta2') {
             $ddp->forma_de_pago=$request->input('digitos2');
         }else{
         $ddp->forma_de_pago=$request->input('formaPago2');            
         }
         $ddp->nota=$request->input('notap2');
        if($request->comprovante22){
         $ddp->comprovante=$request->comprovante22->getClientOriginalName();
         //var_dump($request->comprovante22);die();
        $ddp->addMediaFromRequest('comprovante22')->toMediaCollection('comprovantes');
        } 
         $ddp->worksheet_id=$worksheet->id;
         $ddp->save();
         if ($ddp->forma_de_pago=$request->input('formaPago2' ) == 'nuevatarjeta2') {
         $fdp = new forma_de_pago();
         $fdp->banco=$request->input('banco2');
         $fdp->titular=$request->input('titular2');
         $fdp->afiliacion=$request->input('afiliacion2');
         $fdp->digitos  =$request->input('digitos2');
         $fdp->vigencia=$request->input('vigencia2');
         $fdp->CVV=$request->input('CVV2');
         $fdp->nota=$request->input('nota2');
         $fdp->detalles_de_pagos_id=$ddp->id;
         $fdp->save();
         //var_dump($fdp.'dos');die();
         }

         return redirect()->route('worksheet',$id)->with('success', ' pago  cargado  Correctamente');
        }

     }



 
        




     
    /*


    //si ya exite la primer atarjeta solo editamos
       $ddp = detalles_de_pagos::where('worksheet_id',$worksheet->id)->first();
     if ( $request->input('forma_pago') === 'NuevaTarjeta' && $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first()){
        
         $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();
        
         $fdp->banco=$request->input('banco');
         $fdp->titular=$request->input('titular');
         $fdp->afiliacion=$request->input('afiliacion');
         $fdp->digitos  =$request->input('digitos');
         $fdp->vigencia=$request->input('vigencia');
         $fdp->CVV=$request->input('CVV');
         $fdp->nota=$request->input('nota');
         $fdp->detalles_de_pagos_id=$ddp->id;
         $fdp->update();
        
         //return redirect()->route('worksheet',$id)->with('success', ' tarjeta  modificada  Correctamente');
        
     }
     //no existe  tarjeta del rpimer pago los creamos
     $fdp = forma_de_pago::where('detalles_de_pagos_id',$ddp->id)->first();
    if ($request->input('forma_pago') === 'NuevaTarjeta2') {
         $fdp = new forma_de_pago();
         //$fdp->banco=$request->input('banco');
         $fdp->banco=$request->input('banco2');
         $fdp->titular=$request->input('titular2');
         $fdp->afiliacion=$request->input('afiliacion2');
         $fdp->digitos  =$request->input('digitos2');
         $fdp->vigencia=$request->input('vigencia2');
         $fdp->CVV=$request->input('CVV2');
         $fdp->nota=$request->input('nota2');
         $fdp->detalles_de_pagos_id=$ddp->id;
      
          $fdp->save(); 
        // return redirect()->route('worksheet',$id)->with('success', ' tarjeta  cargado  Correctamente')
     } 


       
        // $id = $request->id_pago;
         //$ddp = detalles_de_pagos::where('worksheet_id',$id)->first();
        // $ddp->comprovante=$request->comprovante->getClientOriginalName();
        // $ddp->addMediaFromRequest('comprovante')->toMediaCollection('comprovantes');
         //var_dump($request->comprovante);
         //$ddp->update();

         //return redirect()->route('worksheet',$id)->with('success', 'comprovante cargado Correctamente');
       
     
    // si se ingresa l atarjeta y si se ingresa detalle de pago
            //se divide para pagos parciales

             //se divide para pagos parciales



     if ($userrole = auth()->user()->roles()->first()->name === 'Verificacion' or $userrole = auth()->user()->roles()->first()->name === 'Administrador' and $request->input('fecha_de_pago2')) {
        
              $request->validate([
             'fecha_de_pago2' => 'required',
             'cantidad2' => 'required',
             'conceptop2' => 'required',
             'status_de_pago2' => 'required|not_in:0',
             'pago_asignado2' => 'required',
             'num_aprovacion2' => 'required',
             'comprovante22' => '',
             'formaPago2' => 'required',

         ]);
         $ddp = new detalles_de_pagos();
         $ddp->fecha_de_pago=$request->input('fecha_de_pago2');
         $ddp->cantidad=$request->input('cantidad2');
         $ddp->concepto=$request->input('conceptop2');
         $ddp->status_de_pago=$request->input('status_de_pago2');
         $ddp->pago_asignado=$request->input('pago_asignado2');
         $ddp->num_aprovacion=$request->input('num_aprovacion2');
         if ($ddp->forma_de_pago=$request->input('formaPago2' ) == 'nuevatarjeta') {
             $ddp->forma_de_pago=$request->input('digitos2');
         }else{
         $ddp->forma_de_pago=$request->input('formaPago2');            
         }
         $ddp->nota=$request->input('notap2');
        if($request->comprovante22){
         $ddp->comprovante=$request->comprovante22->getClientOriginalName();
         var_dump($request->comprovante2);die();
         $ddp->addMediaFromRequest('comprovante22')->toMediaCollection('comprovantes');
       } 
         $ddp->worksheet_id=$worksheet->id;
         $ddp->save();
         //var_dump('prueba ');die();
         return redirect()->route('worksheet',$id)->with('success', ' pago  cargado  Correctamente');
     }

       if($userrole = auth()->user()->roles()->first()->name === 'Ventas'){
       return redirect()->route('worksheet',$id)->with('success', '  Venta actualizada  correctamente');
        }
       if($userrole = auth()->user()->roles()->first()->name === 'Verificacion'){
       return redirect()->route('home')->with('success', 'Verificacion guardada');
        }
       if($userrole = auth()->user()->roles()->first()->name === 'Reservaciones'){
       return redirect()->route('home')->with('success', 'Reservacion guardada');
        }*/

       
     return redirect()->route('worksheet',$id)->with('success', '  Cargado  Correctamente fin');
}
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $worksheet = worksheet::find($id)->delete();
        return redirect()->route('worksheet.index')
        ->with('success', 'Worksheet deleted successfully');
    }
}
