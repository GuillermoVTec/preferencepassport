<?php


//siempre hay que llamar al controlador 

use App\Http\Controllers\CerradorController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\DistribuidoreController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorksheetController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\DetallesDePagoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get("/", function () {
    return redirect()->route("login");
});




Route::get('send-email', [SendEmailController::class, 'index'])->name('send-email');








Auth::routes();
//el prefijo /home hace referencia al url y el prefijo index hace referencia al metodo dentro del controller
//Route::get('/home', [LeadsController::class, 'index']);

Route::post('register2', [DistribuidoreController::class, 'register2'])->name('register2')-> middleware ( 'role:Administrador|auth' );
Route::get('register2', [RegisterController::class, 'showRegistrationForm2'])->name('register2')-> middleware ( 'role:Administrador|auth' );
Route::post('register2', [RegisterController::class, 'register2'])->name('register2')-> middleware ( 'role:Administrador|auth' );


Route::get('perfil', [PerfilController::class, 'index'])->name('perfil')-> middleware ( 'auth' );


Route::get('update', [DistribuidoreController::class, 'update'])->name('update')-> middleware ( 'role:Administrador|auth' );
Route::get('show/{distribuidore}', [DistribuidoreController::class, 'show'])->name('show')-> middleware ( 'role:Administrador|auth' );
Route::get('edit/{distribuidore}', [DistribuidoreController::class, 'edit'])->name('edit')-> middleware ( 'role:Administrador|auth' );
Route::resource('distribuidores', DistribuidoreController::class)-> middleware ( 'role:Administrador|auth' );

Route::get('home', [LeadController::class, 'index2'])->name('home')-> middleware ( 'role:Administrador|Ventas|Distribuidor|Verificacion|Reservaciones|Gerente|Gerente Ventas|auth');
Route::get('leadsCreate', [LeadController::class, 'create'])->name('leadsCreate')-> middleware ( 'role:Administrador|Distribuidor|Gerente|auth' );
Route::get('leadAdmin', [LeadController::class, 'index'])->name('indexAdmin')-> middleware ( 'role:Administrador|Gerente|Gerente Ventas|auth' );


Route::get('leadDist', [LeadController::class, 'index'])->name('indexDist')-> middleware ( 'role:Administrador|Distribuidor|Gerente|auth' );
//rutas de ventas y admin
Route::get('asignar', [LeadController::class, 'asignar'])->name('asignar')-> middleware ( 'role:Administrador|Gerente|Gerente Ventas|auth' );
Route::get('reasignar', [LeadController::class, 'reasignar'])->name('reasignar')-> middleware ( 'role:Administrador|Gerente|Gerente Ventas|auth' );
Route::get('nuevo', [LeadController::class, 'nuevo'])->name('nuevo')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth' );
Route::get('nuevoVlo', [LeadController::class, 'nuevoVerificacion'])->name('nuevoVlo')-> middleware ( 'role:Administrador|Ventas|Verificacion|auth' );
Route::get('noVentaVlo', [LeadController::class, 'noVentaVerificacion'])->name('noVentaVlo')-> middleware ( 'role:Administrador|Ventas|Verificacion|auth' );
Route::get('VentaVlo', [LeadController::class, 'VentaVerificacion'])->name('VentaVlo')-> middleware ( 'role:Administrador|Ventas|Verificacion|auth' );
Route::get('DC', [LeadController::class, 'DCVerificacion'])->name('DC')-> middleware ( 'role:Administrador|Verificacion|auth' );
Route::get('DP', [LeadController::class, 'DPVerificacion'])->name('DP')-> middleware ( 'role:Administrador|Verificacion|auth' );

Route::get('abiertas', [LeadController::class, 'aReservaciones'])->name('abiertas')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('DPR', [LeadController::class, 'DPReservaciones'])->name('DPR')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('suspendida', [LeadController::class, 'sReservaciones'])->name('suspendida')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('rechazada', [LeadController::class, 'rrReservaciones'])->name('rechazada')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('cancelada', [LeadController::class, 'cReservaciones'])->name('cancelada')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('solicitada', [LeadController::class, 'soReservaciones'])->name('solicitada')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('fee', [LeadController::class, 'feeReservaciones'])->name('fee')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('pre', [LeadController::class, 'preReservaciones'])->name('pre')-> middleware ( 'role:Administrador|Reservaciones|auth' );
Route::get('confirmada', [LeadController::class, 'rReservaciones'])->name('confirmada')-> middleware ( 'role:Administrador|Reservaciones|auth' );

Route::get('seguimiento', [LeadController::class, 'seguimiento'])->name('seguimiento')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::get('nocontesto', [LeadController::class, 'nocontesto'])->name('nocontesto')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::get('nointeresado', [LeadController::class, 'nointeresado'])->name('nointeresado')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::get('datosincorrectos', [LeadController::class, 'datosincorrectos'])->name('datosincorrectos')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::get('activados', [LeadController::class, 'activados'])->name('activados')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::get('preregistro', [LeadController::class, 'preregistro'])->name('preregistro')-> middleware ( 'role:Administrador|Ventas|auth' );
Route::post('leads.store', [LeadController::class, 'store'])->name('leads.store')-> middleware ( 'role:Administrador|Ventas|Distribuidor|Gerente|auth' );
Route::post('lead.edit', [LeadController::class, 'edit'])->name('lead.edit')-> middleware ( 'role:Administrador|Ventas|Gerente|auth' );
Route::post('lead.store', [LeadController::class, 'store'])->name('lead.store')-> middleware ( 'role:Administrador|Ventas|Gerente|auth' );


Route::get('lead.showCreate/{id}', [LeadController::class, 'showCreate'])->name('lead.showCreate')-> middleware ( 'role:Administrador|Gerente|Gerente Ventas|Ventas|auth' );
Route::post('lead.showStore/{id}', [LeadController::class, 'showStore'])->name('lead.showStore')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth' );

Route::post('lead.showUpdate/{id}', [LeadController::class, 'showUpdate'])->name('lead.showUpdate')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth' );

Route::get('editWorksheet/{id}', [LeadController::class, 'editWorksheet'])->name('editWorksheet')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|Gerente|auth' );

Route::patch('updateWorksheet/{id}', [LeadController::class, 'updateWorksheet'])->name('updateWorksheet')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|Gerente|auth' );

Route::patch('Worksheet/{id}', [WorksheetController::class, 'update'])->name('Worksheet')-> middleware ( 'role:Administrador|Ventas|Verificacion|Gerente|Gerente Ventas|Reservaciones|Gerente|auth');

//Route::get('lead', [LeadController::class, 'storeDist'])->name('leads.store');
//Route::post('lead', [LeadController::class, 'store'])->name('leads.store');
Route::get('lead.asignar', [LeadController::class, 'updateAsignar'])->name('lead.asignar')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth' );
Route::get('lead.reAsignar', [LeadController::class, 'updateReasignar'])->name('lead.reAsignar')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth');
Route::post('lead.showStore/{id}', [LeadController::class, 'showStore'])->name('lead.showStore')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth');
Route::resource('lead', LeadController::class)-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth' );
Route::get('lead/{lead}', [LeadController::class, 'show'])->name('lead.show')-> middleware ( 'role:Administrador|Ventas|Distribuidor|Gerente|Gerente Ventas|auth');
Route::get('lead/{lead}/edit ', [LeadController::class, 'edit'])->name('lead/{lead}/edit ')-> middleware ( 'role:Administrador|Ventas|Gerente|Gerente Ventas|auth');

//cerradores

Route::get('CerradorCreate', [CerradorController::class, 'create'])->name('CerradorCreate')-> middleware ( 'role:Administrador|auth');
Route::get('cerrador', [CerradorController::class, 'index'])->name('cerrador')-> middleware ( 'role:Administrador|auth');
Route::resource('cerradors', CerradorController::class)-> middleware ( 'role:Administrador|auth');

Route::resource('users', UserController::class)-> middleware ( 'role:Administrador|auth');

Route::patch('worksheetUpdate/{id}', [WorksheetController::class, 'update'])->name('worksheetUpdate')-> middleware ( 'role:Administrador|Verificacion|Ventas|Reservaciones|Gerente Ventas|Gerente|auth');
Route::get('worksheet/{id}', [WorksheetController::class, 'edit'])->name('worksheet')-> middleware ( 'role:Administrador|Verificacion|Ventas|Reservaciones|Gerente Ventas|Gerente|auth');
Route::resource('worksheet', WorksheetController::class)-> middleware ( 'role:Administrador|Verificacion|Ventas|auth');

Route::post('storeddp', [DetallesDePagoController::class, 'store'])->name('storeddp')-> middleware ( 'role:Administrador|Ventas|Gerente|auth' );
Route::get('indexddp', [DetallesDePagoController::class, 'index'])->name('indexddp')-> middleware ( 'role:Administrador|Distribuidor|Gerente|auth' );
Route::patch('detallesDePago/{id}', [DetallesDePagoController::class, 'update'])->name('detallesDePagoUpdate')-> middleware ( 'role:Administrador|Verificacion|Ventas|Reservaciones|Gerente Ventas|Gerente|auth');
Route::get('detallesDePago/{id}', [DetallesDePagoController::class, 'edit'])->name('detallesDePago/{id}')-> middleware ( 'role:Administrador|Verificacion|Ventas|Reservaciones|Gerente Ventas|Gerente|auth');
Route::get('createddp', [DetallesDePagoController::class, 'create'])->name('createddp')-> middleware ( 'role:Administrador|auth');
Route::resource('detallesDePago', DetallesDePagoController::class)->middleware('role:Administrador|Verificacion|Ventas|auth');
https://diarioprogramador.com/crear-crud-en-laravel-con-generador-de-cruds/
