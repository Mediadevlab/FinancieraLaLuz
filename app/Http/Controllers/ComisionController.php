<?php

namespace App\Http\Controllers;

use App\Models\Comision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class ComisionController
 * @package App\Http\Controllers
 */
class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('comision_index'), 403);
        $comisions = Comision::paginate(3000);

        return view('comision.index', compact('comisions'))
            ->with('i', (request()->input('page', 1) - 1) * $comisions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('comision_create'), 403);
        $comision = new Comision();
        return view('comision.create', compact('comision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comision::$rules);

        $comision = Comision::create($request->all());

        return redirect()->route('comision.index')
            ->with('success', 'Comisión creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('comision_show'), 403);
        $comision = Comision::find($id);

        return view('comision.show', compact('comision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('comision_edit'), 403);
        $comision = Comision::find($id);

        return view('comision.edit', compact('comision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comision $comision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comision $comision)
    {
        request()->validate(Comision::$rules);

        $comision->update($request->all());

        return redirect()->route('comision.index')
            ->with('success', 'Comisión actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('comision_destroy'), 403);
        $comision = Comision::find($id)->delete();

        return redirect()->route('comision.index')
            ->with('success', 'Comisión eliminada exitosamente');
    }
}
