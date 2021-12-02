<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidaturasController extends Controller
{
    public function index() 
    {
        return view('deal.candidaturas');
    }
}
