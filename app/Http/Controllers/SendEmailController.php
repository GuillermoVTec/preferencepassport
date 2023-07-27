<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\correo;
 
 
class SendEmailController extends Controller
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
     
    public function index()
    {
  $mailData = [
            'titulo' => 'nuevo lead:',
            'Email' => 'memo',
            'nombre' => 'memo',
            'url' => 'http://crm.vacationcards.com/'
        ];
      Mail::to('memonuevecero@gmail.com')->send(new correo($mailData));
 

    } 
}
