<?php

namespace App\Http\Controllers;

use App\Models\Fiduciario;
use Illuminate\Http\Request;

/**
 * Class FiduciarioController
 * @package App\Http\Controllers
 */
class FiduciarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiduciarios = Fiduciario::paginate();

        return view('fiduciario.index', compact('fiduciarios'))
            ->with('i', (request()->input('page', 1) - 1) * $fiduciarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fiduciario = new Fiduciario();
        return view('fiduciario.create', compact('fiduciario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fiduciario::$rules);

        $newfoto = new Fiduciario();
        $newfotoAval = new Fiduciario();
        
        //script para subir foto Cliente Fiduciario
        if( $request -> hasFile('foto') ){
            $file = $request -> file('foto');
            $destinationPath = 'img/clientes/fiduciario/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto') -> move($destinationPath, $filename);
            $newfoto -> foto = $destinationPath . $filename;
        }

        //script para subir foto Aval Fiduciario
        if( $request -> hasFile('foto_aval') ){
            $file = $request -> file('foto_aval');
            $destinationPath = 'img/clientes/fiduciario/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto_aval') -> move($destinationPath, $filename);
            $newfotoAval -> foto_aval = $destinationPath . $filename;
        }

        $fiduciario = Fiduciario::create($request->all());

        return redirect()->route('fiduciarios.index')
            ->with('success', 'Fiduciario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiduciario = Fiduciario::find($id);

        return view('fiduciario.show', compact('fiduciario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fiduciario = Fiduciario::find($id);

        return view('fiduciario.edit', compact('fiduciario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fiduciario $fiduciario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fiduciario $fiduciario)
    {
        request()->validate(Fiduciario::$rules);

        $fiduciario->update($request->all());

        return redirect()->route('fiduciarios.index')
            ->with('success', 'Fiduciario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fiduciario = Fiduciario::find($id)->delete();

        return redirect()->route('fiduciarios.index')
            ->with('success', 'Fiduciario deleted successfully');
    }
}
