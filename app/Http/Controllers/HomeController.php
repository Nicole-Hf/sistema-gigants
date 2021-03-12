<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $comprasmes = DB::select('SELECT monthname(c.fecha) as mes, sum(c.total) as totalmes
                                        from compras c where c.estado="Completado" group by monthname(c.fecha)
                                        order by month(c.fecha) desc limit 12');

        $totales = DB::select('SELECT (select ifnull(sum(c.total),0)
                                     from compras c where DATE (c.fecha)=curdate() and c.estado="Completado") as totalcompra,
                                     (select ifnull(sum(v.total),0)
                                      from facturas v where DATE(v.fecha_emision)=curdate()) as totalventa');

        return view('home',compact('comprasmes','totales'));
    }
}
