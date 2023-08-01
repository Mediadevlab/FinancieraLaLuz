<?php

namespace App\Http\Controllers;

use App\Models\Cobro;
use App\Models\Prestamo;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class CobroController
 * @package App\Http\Controllers
 */
class CobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('cobro_index'), 403);
        $cobros = Cobro::paginate(3000);

        return view('cobro.index', compact('cobros'))
            ->with('i', (request()->input('page', 1) - 1) * $cobros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('cobro_create'), 403);
        $cobro = new Cobro();
        $prestamos = Prestamo::pluck('codigo','id');
        return view('cobro.create', compact('cobro','prestamos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cobro::$rules);

        $cobro = Cobro::create($request->all());

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('cobro_show'), 403);
        $cobro = Cobro::find($id);

        return view('cobro.show', compact('cobro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('cobro_edit'), 403);
        $cobro = Cobro::find($id);

        return view('cobro.edit', compact('cobro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cobro $cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cobro $cobro)
    {
        request()->validate(Cobro::$rules);

        $cobro->update($request->all());

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('cobro_destroy'), 403);
        $cobro = Cobro::find($id)->delete();

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro deleted successfully');
    }
}
