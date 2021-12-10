<?php

namespace App\Http\Controllers;

use App\Vaga;
use App\Habilidade;
use App\HabilidadeVaga;
use App\Http\Requests\StoreVagaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function store(StoreVagaRequest $request)
    {

        dd($request->all());

        try {

            DB::beginTransaction();

            // criando a vaga
            $vaga = Vaga::create([
                'user_post_id'  => Auth::user()->id,
                'titulo'        => $request->titulo,
                'descricao'     => $request->descricao,
                'tipo_vaga'     => $request->tipo_vaga,
                'dt_abertura'   => $request->dt_abertura,
                'dt_fechamento' => $request->dt_fechamento
            ]);

            // cria ou atualiza as habilidades
            foreach($request->habilidades as $habilidade) {

                $habilidade = Habilidade::updateOrCreate(['nome' => $habilidade]);

                HabilidadeVaga::create([
                    'habilidade_id' => $habilidade->id,
                    'vaga_id'       => $vaga->id
                ]);
            }

            DB::commit();

            $request->session()->flash('sucesso!', 'Vaga criada com sucesso!');

            return response()->json(['id' => $vaga->id]);

        } catch (\Throwable $th) {

            DB::rollBack();

            abort(500, $th->getMessage());
        }

    }
}
