<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Distribuidore;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

         if($data['roles'] == 'Distribuidor') {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles'  =>['required'],
            'razonsocial'  =>['required'],
            'representantelegal' =>['required'],
            'rfc' =>['required'],
            'direccion' =>['required'],
            'ciudad' =>['required'],
            'pais' =>['required'],
            'cp' =>['required'],
            'telefono' =>['required'],
            'date' =>['required'],
            'matriculaid' =>['required'],
            'roles'  =>['required'],
        ]);
        }else{
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles'  =>['required', 'min:2'],
            

        ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)

    {
        /**creamos el usario y le pasamos los valores junto al rol para que al momento de crerar guarde el roll y id**/
        $user = new User();
        $dist = new Distribuidore();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->status= 1;
        $user->password=Hash::make($data['password']);
        $user->assignRole($data['roles']);
        if (isset($data['avatar'])) {
        $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
    }else{
        $user->addMedia('public/fotos-de-usuarios/default.png')->preservingOriginal()->toMediaCollection('avatars');
    }
    

      $user->save();  
    
     if(isset($data['razonsocial'])) {
        $dist->razonsocial = $data['razonsocial'];
        $dist->representantelegal = $data['representantelegal'];
        $dist->rfc = $data['rfc'];
        $dist->direccion = $data['direccion'];
        $dist->ciudad = $data['ciudad'];
        $dist->pais = $data['pais'];
        $dist->cp = $data['cp'];
        $dist->telefono = $data['telefono'];
        $dist->date = $data['date'];
        $dist->matriculaid = $data['matriculaid'];
        $dist->user_id = $user->id;   

        $mailData = [
            'titulo' => 'Tu usario y contraseña:',
            'Usuario' => $user->email=$data['email'],
            'Contraseña' => $user->password=$data['password'],
            'url' => 'http://crm.vacationcards.com/'
        ];
       
        
        $dist->save();
        Mail::to($user->email=$data['email'])->send(new Email($mailData));
        return $user;
    }else{
                $mailData = [
            'titulo' => 'Tu usario y contraseña:',
            'Usuario' => $user->email=$data['email'],
            'Contraseña' => $user->password=$data['password'],
            'url' => 'http://crm.vacationcards.com/'
        ];
         $user->save();
         Mail::to($user->email=$data['email'])->send(new Email($mailData));
         return $user;
    }
    }
}