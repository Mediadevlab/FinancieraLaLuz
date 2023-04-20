<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('cliente_index'), 403);
        $clientes = Cliente::paginate(3000);

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('cliente_create'), 403);
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$rules);

        $newCli = new Cliente();
        $newCroCasa = new Cliente();
        $newCroTrab = new Cliente();
        
        //script para subir foto Cliente
        if( $request -> hasFile('foto_cliente') ){
            $file = $request -> file('foto_cliente');
            $destinationPath = 'img/clientes/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto_cliente') -> move($destinationPath, $filename);
            $newCli -> foto_cliente = $destinationPath . $filename;
        }

        //script para subir foto casa
        if( $request -> hasFile('croquis_casa') ){
            $file = $request -> file('croquis_casa');
            $destinationPath = 'img/clientes/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('croquis_casa') -> move($destinationPath, $filename);
            $newCroCasa -> croquis_casa = $destinationPath . $filename;
        }

        //script para subir foto casa
        if( $request -> hasFile('croquis_trabajo') ){
            $file = $request -> file('croquis_trabajo');
            $destinationPath = 'img/clientes/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('croquis_trabajo') -> move($destinationPath, $filename);
            $newCroTrab -> croquis_trabajo = $destinationPath . $filename;
        }

        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', '¡Cliente creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('cliente_show'), 403);
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('cliente_edit'), 403);
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        request()->validate(Cliente::$rules);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('cliente_destroy'), 403);
        $cliente = Cliente::find($id)->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    }
}
