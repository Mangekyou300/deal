<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerfilRequest;
use App\Perfil;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function show(Perfil $perfil)
    {
        $tipo = Auth::user()->tipo_usuario_id;

        switch ($tipo) {
            case 2:

                return view('deal.perfil.perfil_professional', compact('perfil'));
                break;

            case 3:

                return view('deal.perfil.perfil_contractor', compact('perfil'));
                break;

            default:
                echo '<h1> Um administrador precisa criar um perfil </h1>';
                break;
        }
    }

    public function create()
    {
        $user = Auth::user();

        switch ($user->tipo_usuario_id) {

            case 2:
            case 3:

                return view('deal.perfil.create', compact('user'));
                break;

            default:
                echo '<h1> Não existe tipo de perfil para Usuários Administradores </h1>';
                break;
        }
    }

    public function store(StorePerfilRequest $request)
    {
        dd($request->all());
        // if($request->hasFile('avatar') && $request->file('avatar')->isValid()) {

        //     $name = 'avatar_' . $request->cpf_cpnj;
        //     $extension = $request->avatar->extension();
        // }
    }
}
