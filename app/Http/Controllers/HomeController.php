<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //procedimiento para llenado de graficas Barras
        $data = Prestamo::select('id', 'created_at') -> get() -> groupBy(function($data){
            return Carbon::parse($data -> created_at) -> format('M');
        });

        $months = [];
        $monthCount = [];

        foreach($data as $month => $values){
            $months[] = $month;
            $monthCount[] = count($values);
        }
        //fin procedimiento

        return view('home',['data' => $data, 'months' => $months, 'monthCount' => $monthCount]);
    }

    public function operations()
    {
        return DB::table('prestamo')->sum('capital');
    }
    

}
