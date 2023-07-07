<?php

 
namespace App\Http\Controllers;
 
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;





/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
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
        public function changePassword($id)
    {
        $user = User::find($id);
        return view('user.change-password',compact('user'));
    }
    
    public function changePasswordSave(Request $request, User $user)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $id = $_REQUEST['id_pass'];
        $auth = $_REQUEST['pass'];

        
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  User::find($id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre= $request->get('busqueda');
        $users = User::nombres($nombre)->Paginate(15);
        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        

        $user->update();
        $user->name = $request->name;
        $user->email = $request->email;
    if($user->password !== ""){
        
            $user->password =  Hash::make($request->password);
        if($request->status == true){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'User actualizado correctamente');
    }else{
         if($request->status == true){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'User actualizado correctamente');
        
    }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole('Desactivado');


        return redirect()->route('users.edit',$id)
            ->with('success', 'User desactivado  correctamente');
    }
        public function activar($id)
    {
        $role= $request->get('role');
        $user = User::find($id);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($role);


        return redirect()->route('users.edit',$id)
            ->with('success', 'User activado correctamemte');
    }
}
