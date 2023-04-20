<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('empleado_index'), 403);
        $empleados = Empleado::paginate(3000);

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('empleado_create'), 403);
        $empleado = new Empleado();
        return view('empleado.create', compact('empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleado::$rules);

        $newEmp = new Empleado();
        
        //script para subir foto
        if( $request -> hasFile('foto_emp') ){
            $file = $request -> file('foto_emp');
            $destinationPath = 'img/featureds/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto_emp') -> move($destinationPath, $filename);
            $newEmp -> foto_emp = $destinationPath . $filename;
        }

        $empleado = Empleado::create($request->all());

        return redirect()->route('empleados.index')
            ->with('success', '¡Empleado creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('empleado_show'), 403);
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('empleado_edit'), 403);
        $empleado = Empleado::find($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        request()->validate(Empleado::$rules);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')
            ->with('success', '¡Empleado actualizado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('empleado_destroy'), 403);
        $empleado = Empleado::find($id)->delete();

        return redirect()->route('empleados.index')
            ->with('success', '¡Empleado eliminado exitosamente!');
    }
}
