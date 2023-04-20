<?php

namespace App\Http\Controllers;

use App\Models\Hipotecario;
use Illuminate\Http\Request;

/**
 * Class HipotecarioController
 * @package App\Http\Controllers
 */
class HipotecarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hipotecarios = Hipotecario::paginate();

        return view('hipotecario.index', compact('hipotecarios'))
            ->with('i', (request()->input('page', 1) - 1) * $hipotecarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hipotecario = new Hipotecario();
        return view('hipotecario.create', compact('hipotecario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hipotecario::$rules);

        $newhipotecario = new Hipotecario();
        $newinmueble = new Hipotecario();
        
        //script para subir foto hipotecario
        if( $request -> hasFile('foto') ){
            $file = $request -> file('foto');
            $destinationPath = 'img/clientes/hipotecario';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto') -> move($destinationPath, $filename);
            $newhipotecario -> foto = $destinationPath . $filename;
        }

        //script para subir foto inmueble
        if( $request -> hasFile('foto_inmueble') ){
            $file = $request -> file('foto_inmueble');
            $destinationPath = 'img/clientes/hipotecario';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto_inmueble') -> move($destinationPath, $filename);
            $newinmueble -> foto_inmueble = $destinationPath . $filename;
        }

        $hipotecario = Hipotecario::create($request->all());

        return redirect()->route('hipotecarios.index')
            ->with('success', 'Hipotecario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hipotecario = Hipotecario::find($id);

        return view('hipotecario.show', compact('hipotecario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hipotecario = Hipotecario::find($id);

        return view('hipotecario.edit', compact('hipotecario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hipotecario $hipotecario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hipotecario $hipotecario)
    {
        request()->validate(Hipotecario::$rules);

        $hipotecario->update($request->all());

        return redirect()->route('hipotecarios.index')
            ->with('success', 'Hipotecario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hipotecario = Hipotecario::find($id)->delete();

        return redirect()->route('hipotecarios.index')
            ->with('success', 'Hipotecario deleted successfully');
    }
}
