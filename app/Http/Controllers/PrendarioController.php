<?php

namespace App\Http\Controllers;

use App\Models\Prendario;
use Illuminate\Http\Request;

/**
 * Class PrendarioController
 * @package App\Http\Controllers
 */
class PrendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prendarios = Prendario::paginate();

        return view('prendario.index', compact('prendarios'))
            ->with('i', (request()->input('page', 1) - 1) * $prendarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prendario = new Prendario();
        return view('prendario.create', compact('prendario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prendario::$rules);

        $newPrendario = new Prendario();
        $newPrendarioVeh = new Prendario();
        
        //script para subir foto prendario
        if( $request -> hasFile('foto') ){
            $file = $request -> file('foto');
            $destinationPath = 'img/clientes/prendario';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto') -> move($destinationPath, $filename);
            $newPrendario -> foto = $destinationPath . $filename;
        }

         //script para subir foto vehiculo
         if( $request -> hasFile('foto_vehiculo') ){
            $file = $request -> file('foto_vehiculo');
            $destinationPath = 'img/clientes/prendario';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto_vehiculo') -> move($destinationPath, $filename);
            $newPrendarioVeh -> foto_vehiculo = $destinationPath . $filename;
        }

        $prendario = Prendario::create($request->all());

        return redirect()->route('prendarios.index')
            ->with('success', 'Prendario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prendario = Prendario::find($id);

        return view('prendario.show', compact('prendario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prendario = Prendario::find($id);

        return view('prendario.edit', compact('prendario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prendario $prendario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prendario $prendario)
    {
        request()->validate(Prendario::$rules);

        $prendario->update($request->all());

        return redirect()->route('prendarios.index')
            ->with('success', 'Prendario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prendario = Prendario::find($id)->delete();

        return redirect()->route('prendarios.index')
            ->with('success', 'Prendario deleted successfully');
    }
}
