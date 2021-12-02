<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaga;

class VagasController extends Controller
{
    // ''

    public function index() 
    {
        return view('deal.vagas.index');
    }

    public function create()
    {
        return view('deal.vagas.create');
    }

    public function show(Vaga $vaga = null) 
    {
        return view('deal.vagas.show');
    }

    public function store(Request $request) 
    {
        dd($request->all());
    }
}
