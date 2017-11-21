<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioPermitidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permitido');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function permitidoView () {

        return view('permitido');


    }

    public function index()
    {
        return view('noPermitido');
    }
}
