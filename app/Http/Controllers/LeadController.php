<?php

namespace App\Http\Controllers;

use App\Models\Lead;

use App\Models\worksheet;
use App\Models\leads_distribuidor;
use Illuminate\Support\Str;
use App\Models\Distribuidore;
use App\Models\Cerrador;
use App\Models\Nota;
use App\Models\statuses;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Mail\Mailable;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;
use App\Events\LeadEmail;
use App\Jobs\ProcessLeads;
use App\Mail\Email;

/**
 * Class LeadController
 * @package App\Http\Controllers
 */
class LeadController extends Controller
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

         public function index(Request $request){
                         //me trae usarios con el rol ventas mediante el query
            $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                  $fecha1= $request->get('fecha1');
                  $fecha2= $request->get('fecha2');
                  $nombre= $request->get('busqueda');    
                  $leads = lead::whereNotIn('statuses_id', [8])->nombres($nombre)->fechas($fecha1,$fecha2)->orderBy('created_at', 'desc')->Paginate(15);
                  $worksheets = worksheet::all();
                
                 
                  return view('lead.indexAdmin', compact('worksheets','leads','usuariosConRol'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }elseif($userrole=='Distribuidor'){
                 $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                  //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  $leads = leads_distribuidor::where('user_name', auth()->user()->name)->nombres($nombre)->fechas($fecha1,$fecha2)->orderBy('created_at', 'desc')->paginate(15);
                  ;
                  return view('lead.indexDist', compact('leads','usuariosConRol'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                 $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->orderBy('created_at', 'desc')->Paginate(15);
                 $worksheets = worksheet::all();
                
                 
                 return view('lead.indexAdmin', compact('worksheets','leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
    public function asignar(Request $request){
            
          
         
           
 
            //me trae usarios con el rol ventas mediando el query
            $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
           // este me trae todos los usuarios que tienen roles
          // $usuariosConRol = User::has('roles')->get();
          
          
            $status = statuses::all();
            $distribuidores = User::whereHas("roles", function($q){ $q->where("name", "Distribuidor")->orWhere('name', '=', 'Administrador')->orWhere('name', '=', 'Gerente'); })->get();
            $cerradores = Cerrador::all();
            $username = auth()->user()->name;
            $userrole = auth()->user()->roles()->first()->name;
            $fecha1= $request->get('fecha1');
            $fecha2= $request->get('fecha2');   
            $statusb = $request->get('status');
            $userid = $request->get('userid');
            $matricula= $request->get('matriculaid');    
            if($statusb && $matricula){
                $leads = lead::where('statuses_id', $statusb)->users($matricula)->whereNull('id_vendedor')->Paginate(15);
                $count = $leads->count();
            }elseif($statusb == "" && $matricula == ""){
                 $leads = lead::whereNull('id_vendedor')->Paginate(15);
                 $count = $leads->count();  
            }elseif($matricula){
                $leads = lead::users($matricula)->whereNull('id_vendedor')->Paginate(15);
                $count = $leads->count();
            }else{
                 $leads = lead::where('statuses_id', $statusb)->whereNull('id_vendedor')->Paginate(15); 
                 $count = $leads->count();
            }
                 
                               

                 return view('lead.asignar', compact('leads','distribuidores','status','usuariosConRol','count'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());
                 

            


    }
     protected function validator(array $data)
    {

         return Validator::make($data, [
            'Uventas' => ['required'],
            'nlead' => ['required'],
            'statusb' => ['required'],
            'matricula'  =>['required'],
            
             ]);
        
        
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function updateAsignar(Request $request ){
         

        //usario al que se le asigan
        $Uventas = $request->get('Uventas');
        //numeros de leads a asignar
        $nlead = $request->get('nlead');
        //si se asigaran por estado o general
        $statusb = $request->get('statusb');
        //matricula de dsitribuidor
        $matricula= $request->get('matriculaid');
        
       if($statusb && $matricula && $nlead){
            $leads = lead::latest()->take($nlead)->users($matricula)->where('statuses_id', $statusb)->whereNull('id_vendedor')->get();
                    $leads->toQuery()->update(['id_vendedor' => $Uventas]);
                     return redirect()->route('asignar')
                     ->with('success', 'Lead asignados correctamente successfully');
       }else{
           return redirect()->route('asignar')
                     ->with('danger', 'la informacion es requerida completa');
       }
       
        
       



    }
    
    
    
    
     public function reasignar(Request $request){
            
          
         
           
 
            //me trae usarios con el rol ventas mediante el query
            $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
           
         
           // este me trae todos los usuarios que tienen roles
          // $usuariosConRol = User::has('roles')->get();
          
            $status = statuses::all();
            $distribuidores = Distribuidore::all();
            $cerradores = Cerrador::all();
            $username = auth()->user()->name;
            $userrole = auth()->user()->roles()->first()->name;
           
            $fecha1= $request->get('fecha1');
            $fecha2= $request->get('fecha2');
            $vendedor= $request->get('vendedor');    
            $statusb = $request->get('status');
            $userid = $request->get('userid');
            $matricula= $request->get('matriculaid');    
            if($vendedor && $statusb == "" && $matricula == ""){
                $leads = lead::where('id_vendedor',$vendedor)->Paginate(15); 
                $count = $leads->count();
            }elseif($vendedor == "" && $statusb  && $matricula == ""){
                $leads = lead::where('statuses_id', $statusb)->whereNotNull('id_vendedor')->Paginate(15);
                $count = $leads->count();
            }
            elseif($vendedor  && $statusb  && $matricula == ""){
                $leads = lead::where('id_vendedor',$vendedor)->where('statuses_id', $statusb)->Paginate(15);
                $count = $leads->count();
            }
            elseif($vendedor  && $statusb == ""  && $matricula ){
                $leads = lead::where('id_vendedor',$vendedor)->users($matricula)->Paginate(15);
                $count = $leads->count();
            }
            elseif($vendedor && $statusb && $matricula){
                $leads = lead::where('id_vendedor',$vendedor)->users($matricula)->where('statuses_id', $statusb)->Paginate(15);
                $count = $leads->count();
            }
            elseif($statusb == "" && $matricula == "" && $vendedor == ""){
                 $leads = lead::whereNotNull('id_vendedor')->Paginate(15);
                 $count = $leads->count();
                   
            }elseif($statusb == "" && $matricula && $vendedor == ""){
                 $leads = lead::whereNotNull('id_vendedor')->users($matricula)->Paginate(15);
                 $count = $leads->count();
                   
            }else{
                 $leads = lead::where('id_vendedor',$vendedor)->Paginate(15);
                 $count = $leads->count();
            }
                
                               

                 return view('lead.reasignar', compact('leads','distribuidores','status','usuariosConRol','vendedor','count'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());
                 

            


    }
           /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function updateReasignar(Request $request ){

        $Uventas2 = $request->get('Uventas2');
        //usario al que se le asigan
        $Uventas = $request->get('Uventas');
        //numeros de leads a asignar
        $nlead = $request->get('nlead');
        //si se asigaran por estado o general
        $statusb = $request->get('statusb');
        //matricula de dsitribuidor
        $matricula= $request->get('matriculaid');
        
       if($statusb && $matricula && $nlead && $Uventas2){
           
            $leads = lead::latest()->take($nlead)->users($matricula)->where('statuses_id', $statusb)->where('id_vendedor',$Uventas2)->get();
            
                    $leads->toQuery()->update(['id_vendedor' => $Uventas]);
                     return redirect()->route('reasignar')
                     ->with('success', 'Lead asignados correctamente successfully');
       }else{
           return redirect()->route('reasignar')
                     ->with('danger', 'la informacion es requerida completa');
       }
       
        
       



    }
    
    
     public function nuevo(Request $request){
             $username = auth()->user()->name;
             $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '1')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::where('statuses_id', '1')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
public function nuevoVerificacion(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $vlo = 'nueva';
                $leads = lead::where('statuses_id', '8')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.vlo', compact('vlo','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
public function noVentaVerificacion(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $vlo = 'noventa';
                $leads = lead::where('statuses_id', '9')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.vlo', compact('vlo','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function VentaVerificacion(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $vlo = 'ventavlo';
                $leads = lead::where('statuses_id', '10')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.vlo', compact('vlo','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
        public function DPVerificacion(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $vlo = 'dp';
                $leads = lead::where('statuses_id', '11')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.vlo', compact('vlo','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function DCVerificacion(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $vlo = 'dc';
                $leads = lead::where('statuses_id', '12')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.vlo', compact('vlo','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function aReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'abiertas';
                $leads = lead::where('statuses_id', '21')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function DPReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'datospendientes';
                $leads = lead::where('statuses_id', '13')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function sReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'suspendida';
                $leads = lead::where('statuses_id', '14')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
     public function rrReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'rechazadaporelhotel';
                $leads = lead::where('statuses_id', '15')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
     public function cReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'cancelada';
                $leads = lead::where('statuses_id', '16')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
         public function soReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'solicitada';
                $leads = lead::where('statuses_id', '17')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
         public function feeReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'pagodefeependiente';
                $leads = lead::where('statuses_id', '18')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function preReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'pre';
                $leads = lead::where('statuses_id', '19')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
    public function rReservaciones(Request $request){
                $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
                $username = auth()->user()->name;
                $userid = auth()->user()->id;
                $userrole = auth()->user()->roles()->first()->name;
                $fecha1= $request->get('fecha1');
                $fecha2= $request->get('fecha2');
                $nombre= $request->get('busqueda');    
                $res = 'confirmada';
                $leads = lead::where('statuses_id', '20')->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                return view('lead.reservaciones', compact('res','leads','usuariosConRol'))->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            


    }
 public function seguimiento(Request $request){
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
             $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '2')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '2')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads','usuariosConRol'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
     public function nocontesto(Request $request){
             $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '3')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '3')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
    public function nointeresado(Request $request){
        $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '4')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '4')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
    public function activados(Request $request){
        $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '5')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '5')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
     public function datosincorrectos(Request $request){
         $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '6')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '6')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
    public function preregistro(Request $request){
        $usuariosConRol = User::whereHas("roles", function($q){ $q->where("name", "Ventas"); })->get();
             $username = auth()->user()->name;
             $userid = auth()->user()->id;
            $userrole = auth()->user()->roles()->first()->name;
            if($userrole=='Administrador'){
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');
                 
        
                  $nombre= $request->get('busqueda');    
        
                 $leads = lead::where('statuses_id', '7')->nombres($nombre)->fechas($fecha1,$fecha2)->Paginate(15);

                 return view('lead.indexAdmin', compact('leads','usuariosConRol'))
                 ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }else{
                $fecha1= $request->get('fecha1');
                 $fecha2= $request->get('fecha2');

        
                 $nombre= $request->get('busqueda');    
        
                 
                 //$leads = lead::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                 $leads = lead::with('statuses')->where('statuses_id', '7')->where('id_vendedor',$userid)->nombres($nombre)->fechas($fecha1,$fecha2)->paginate(15);
                  return view('lead.ventas', compact('leads'))
                  ->with('i', (request()->input('page', 1) - 1) * $leads->perPage());

            }


    }
        public function index2()
    {
      

        return view('livewire.index');
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $date = Carbon::now();
        $lead = new lead();
        
        $userrole = auth()->user()->roles()->first()->name;
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;
        $action = "create";
        $password = Str::random(10); // Genera una contraseña aleatoria de 10 caracteres
     
            return view('lead.create', compact('password','action','lead',"username",'username2','date'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Lead::$rules);
        $request->validate([
             'username2' => 'required',
             'nombre' => 'required',
             'edad' => 'required|numeric|integer',
             'estadocivil' => 'required',
             'telefono1' => 'required',
             'telefono2' => 'required',
             'correo' => 'required',
             'pais' => 'required',
            
             

         ]);
//aqui se creara la nota
        $lead = Lead::create($request->all()); 
        $lead->save();
        ProcessLeads::dispatchAfterResponse($lead);
        $leads = new Leads_distribuidor();
        $leads->user_name = $request->input('username2');
        $leads->nombre = $request->input('nombre');
        $leads->edad = $request->input('edad');
        $leads->estadocivil = $request->input('estadocivil');
        $leads->telefono1 = $request->input('telefono1');
        $leads->telefono2 = $request->input('telefono2');
        $leads->correo = $request->input('correo');
        $leads->pais = $request->input('pais');
        $leads->notal = $request->input('notal');
        $leads->tarjeta = $request->input('tarjeta');
        $leads->password = $request->input('password');
        $leads->created_at2 = $request->input('created_at2');
        $leads->id_lead = $lead->id;
        $leads->save();

            
            

        
        $username = auth()->user()->name;
        $userrole = auth()->user()->roles()->first()->name;
        if ($userrole=='Administrador') {
           
            $mailData=[
                'titulo' => 'nuevo lead:',
                'Email' => $request->input('correo'),
                'nombre' => $request->input('nombre'),
                'tarjeta' => $request->input('tarjeta'),
                'password'=> $request->input('password'),
                'url' => 'https://preferencepassport.com/preferencepassport/login' 
            ];
            if(isset($mailData)){
                echo($mailData['Email']);
                //Mail::to($request->input('correo'))->send(new correo($mailData));
            }
            
             return redirect()->route('indexAdmin')
            ->with('success', 'Lead creado correctamente.');
                   // code...
        }else{
            
             return redirect()->route('indexDist')
            ->with('success', 'Lead creado correctamente.');
                   // code...
        }
        
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request, Nota $nota)
    {
        $userrole = auth()->user()->roles()->first()->name;
        if($userrole=='Distribuidor'){
        $lead = Leads_distribuidor::where('id_lead',$id)->first();

        $username2 = auth()->user()->name;
        $status = statuses::all();
        $cerradores = Cerrador::all();
        
        

       return view('lead.showd', compact('cerradores','lead','username2','status'));  
        }else{
        $lead = Lead::find($id);
        $user = lead::find($id)->User;
        $notas = lead::find($id)->Nota;
        $cerradors = lead::find($id)->Cerrador;
        $statuses = lead::find($id)->statuses;
        $nota->leads_id = $id;
        $username2 = auth()->user()->name;
        $status = statuses::all();
        $cerradores = Cerrador::all();
        $date = $lead->created_at2;
        

       return view('lead.show', compact('cerradores','status','lead','notas','nota','username2','user','cerradors','statuses')); 
        }

    }
        /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function showStore(Request $request, $id, Nota $nota, Lead $lead)
    {
        
        
       $user = lead::find($id)->User;
       $notas = lead::find($id)->Nota;
       $username2 = auth()->user()->name;
       $lead = Lead::find($id);
       $date = $lead->created_at2;
        if($request->nota == null){
            
            $lead->update($request->all());
        }else{
        
        $nota = Nota::create($request->all()); 
        }

       
        
        
        return redirect()->route('lead.show',$id)
            ->with('success', 'Nota creado correctamente.');
       // return view('lead.show', compact('nota','lead','username2','notas'));
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
        $date = $lead->created_at2;
        $status = $lead->statuses_id;
         $userrole = auth()->user()->roles()->first()->name;
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;
        if($userrole == 'Distribuidor'){
            $lead = Lead::find($id);
            $username = auth()->user()->id;
            $username2 = auth()->user()->name;
        }else{
        $lead = Lead::find($id);
        $nota = new Nota();
        $nota->leads_id = $id;
        
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;
        }
        
        $action = "edit";
        return view('lead.edit', compact('action','lead','username','nota','username2','date','status'));
    }
    public function editWorksheet($id)
    {
        $lead = Lead::find($id);
        
        $date = $lead->created_at2;
         $userrole = auth()->user()->roles()->first()->name;
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;
        if($userrole == 'Distribuidor'){
            $lead = Lead::find($id);
            $username = auth()->user()->id;
            $username2 = auth()->user()->name;
        }else{
        $lead = Lead::find($id);
        $nota = new Nota();
        $nota->leads_id = $id;
        
        $username2 = auth()->user()->name;
        $username = auth()->user()->id;
        }

        return view('lead.worksheet-q', compact('lead','username','nota','username2','date'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function updateWorksheet(Request $request, Lead $lead, $id){
        
    
        request()->validate(Lead::$rules);
        
      
         $lead = Lead::find($id);
       

        $lead->nombre = $request->input('nombre');
       
       
         $lead->update();
       
        
        
        return redirect()->route('indexAdmin')
            ->with('success', 'Lead actualizado successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead, Nota $nota){
        
    
        request()->validate(Lead::$rules);
        
      

        
        $userrole = auth()->user()->roles()->first()->name;
        $username = auth()->user()->id;
        if($request->nota == null or $userrole == "Distribuidor"){
        $lead->update($request->all());
        }else{
        $lead->update($request->all());
        $nota = Nota::create($request->all());
            echo "nota es actualizacion completa ";
        }
        return redirect()->route('indexAdmin')
            ->with('success', 'Lead actualizado successfully');
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lead $lead
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function showUpdate(Request $request, Lead $lead, $id){
        
       $lead = Lead::find($id);
       $statusBD = Lead::find($id)->statuses;

        
        
       
        

        if($request->input('statuses_id')== 7){
            $lead->statuses_id = $request->input('statuses_id');
            $lead->update();
            $worksheet = new worksheet();
            
            
        return redirect()->route('worksheet',$lead->id)
        ->with('success', 'Lead status actualizado successfully');
        }elseif($request->input('cerrador_id' != "" ) && $request->input('statuses_id' != "")){

         return redirect()->route('lead.show',$id)->with('success', 'no se puede actualizar cerrador y status al mismo tiempo '); 
        }elseif($request->input('cerrador_id') == "" && $request->input('statuses_id' == "")){

         return redirect()->route('lead.show',$id)->with('success', 'no, se actualizo  nada '); 
        }elseif($request->input('cerrador_id') == ""){
            $lead->statuses_id = $request->input('statuses_id');
             $lead->update();
         return redirect()->route('lead.show',$id)->with('success', 'Lead actualizado successfully'); 
        }elseif($request->input('cerrador_id')){
            $lead->cerrador_id = $request->input('cerrador_id');
             $lead->update();
         return redirect()->route('lead.show',$id)->with('success', 'Lead actualizado successfully');     
        }else{
           return redirect()->route('lead.show',$id)
            ->with('success', 'Lead actualizado successfully');
 
        } 
       
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lead = Lead::find($id)->delete();

        return redirect()->route('lead.index')
            ->with('success', 'Lead deleted successfully');
    }
}
