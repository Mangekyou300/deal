<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerfilRequest;
use Illuminate\Support\Facades\Auth;
use App\Perfil;
use App\User;


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
        $perfil = $request->except('avatar');

        if($request->hasFile('avatar') && $request->file('avatar')->isValid()) {

            $requestAvatar = $request->avatar;
            $extension = $requestAvatar->extension();

            // gerar uma hash com o nome do arquivo
            $imageName = md5($requestAvatar->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $path = $requestAvatar->storeAs('avatares', $imageName);

            $perfil['avatar'] = $path;
        }

        $newPerfil = Perfil::create($perfil);

        return response()->json([
            'success' => 'Perfil criado com sucesso', 
            'type'    => User::find($perfil['user_id'])->tipo_usuario_id,
            'id'      => $newPerfil->id
        ], 200);
    }
}
