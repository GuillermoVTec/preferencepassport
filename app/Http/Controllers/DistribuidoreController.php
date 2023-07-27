<?php

namespace App\Http\Controllers;

use App\Models\Distribuidore;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class DistribuidoreController
 * @package App\Http\Controllers
 */
class DistribuidoreController extends Controller
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
    public function index(Request $request)
    {
        $fecha1= $request->get('fecha1');
        $fecha2= $request->get('fecha2');
        $nombre= $request->get('busqueda'); 
        $distribuidores = Distribuidore::nombres($nombre)->fechas($fecha1,$fecha2)->paginate(); 

        return view('distribuidore.index', compact('distribuidores'))
            ->with('i', (request()->input('page', 1) - 1) * $distribuidores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distribuidore = new Distribuidore();
        return view('distribuidore.create', compact('distribuidore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Distribuidore::$rules);

        $distribuidore = Distribuidore::create($request->all());

        return redirect()->route('distribuidores.index')
            ->with('success', 'Distribuidore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distribuidore = Distribuidore::find($id);

        return view('distribuidore.show', compact('distribuidore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distribuidore = Distribuidore::find($id);

        return view('distribuidore.edit', compact('distribuidore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Distribuidore $distribuidore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distribuidore $distribuidore)
    {
        request()->validate(Distribuidore::$rules);

        $distribuidore->update($request->all());

        return redirect()->route('distribuidores.index')
            ->with('success', 'Distribuidore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
         $distribuidore = Distribuidore::find($id);

        $User = User::find($distribuidore->user_id)->delete();

        return redirect()->route('distribuidores.index')
            ->with('success', 'Distribuidore deleted successfully');
    }
}
