<?php

namespace App\Http\Controllers;

use App\Models\Mypime;
use Illuminate\Http\Request;

/**
 * Class MypimeController
 * @package App\Http\Controllers
 */
class MypimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mypimes = Mypime::paginate();

        return view('mypime.index', compact('mypimes'))
            ->with('i', (request()->input('page', 1) - 1) * $mypimes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mypime = new Mypime();
        return view('mypime.create', compact('mypime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mypime::$rules);

        $newfoto = new Mypime();
        
        //script para subir foto Cliente Mypime
        if( $request -> hasFile('foto') ){
            $file = $request -> file('foto');
            $destinationPath = 'img/clientes/mypime/';
            $filename = time() . '-' . $file -> getClientOriginalName();
            $uploadSuccess = $request -> file('foto') -> move($destinationPath, $filename);
            $newfoto -> foto = $destinationPath . $filename;
        }

        $mypime = Mypime::create($request->all());

        return redirect()->route('mypimes.index')
            ->with('success', 'Mypime created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mypime = Mypime::find($id);

        return view('mypime.show', compact('mypime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mypime = Mypime::find($id);

        return view('mypime.edit', compact('mypime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mypime $mypime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mypime $mypime)
    {
        request()->validate(Mypime::$rules);

        $mypime->update($request->all());

        return redirect()->route('mypimes.index')
            ->with('success', 'Mypime updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mypime = Mypime::find($id)->delete();

        return redirect()->route('mypimes.index')
            ->with('success', 'Mypime deleted successfully');
    }
}
