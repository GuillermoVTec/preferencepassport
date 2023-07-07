<?php

namespace App\Http\Controllers;

use App\Models\Cerrador;
use Illuminate\Http\Request;

/**
 * Class CerradorController
 * @package App\Http\Controllers
 */
class CerradorController extends Controller
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
        $nombre= $request->get('busqueda');
        $cerradors = Cerrador::nombres($nombre)->Paginate(15);

        return view('cerrador.index', compact('cerradors'))
            ->with('i', (request()->input('page', 1) - 1) * $cerradors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cerrador = new Cerrador();
        return view('cerrador.create', compact('cerrador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cerrador::$rules);

        $cerrador = Cerrador::create($request->all());

        return redirect()->route('cerradors.index')
            ->with('success', 'Cerrador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cerrador = Cerrador::find($id);

        return view('cerrador.show', compact('cerrador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cerrador = Cerrador::find($id);

        return view('cerrador.edit', compact('cerrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cerrador $cerrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cerrador $cerrador)
    {
        request()->validate(Cerrador::$rules);

        $cerrador->update($request->all());

        return redirect()->route('cerradors.index')
            ->with('success', 'Cerrador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cerrador = Cerrador::find($id)->delete();

        return redirect()->route('cerradors.index')
            ->with('success', 'Cerrador deleted successfully');
    }
}
