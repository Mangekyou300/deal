@extends('layouts.main')

@section('title', 'Vaga de Emprego')


    @section('content')

        <div class="main">
            <div class="titulo_vaga_de_emprego">
                <h3>{{ $vaga->titulo }}</h3>
            </div>
            <div class="info_vagas_de_emprego">
                <div class="icon_vaga_de_emprego">
                     <i class="fas fa-gavel"></i>
                </div>
                <div class="edit_vagas_de_emprego">
                    <ul>
                    <li><span><b>Contratante:</b> {{ $vaga->contratante->name }}</span></li>
                    <li><span><b>Local:</b> {{ $vaga->contratante->perfil->cidade }}</span></li>
                    <li><span><b>Tipo de Trabalho: </b><span class="job_type"> {{ $vaga->tipo_vaga }}</span></li>
                    <li><span><b>Data Final de Candidatura: </b> {{ Carbon\Carbon::parse($vaga->dt_fechamento)->format('d/m/Y') }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="titulo_vaga_de_emprego">
                <h3>Descrição da Vaga</h3>
            </div>
            <div class="txt_vaga_de_emprego subitens_vaga_de_emprego">
                <span>{{ $vaga->descricao }}</span>
            </div>
            <div class="between"></div>
            <div class="titulo_vaga_de_emprego">
                <h3>Requisitos</h3>
            </div>
            <div class="requisitos_vaga_de_emprego subitens_vaga_de_emprego">
                <ul>
                    @foreach ($vaga->habilidades as $habilidade)
                            <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>{{ $habilidade->nome }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="between"></div>
            
            <div class="bt_baga_de_emprego">
                <button class="cadastrar"><i class="fas fa-file-upload"></i>Candidatar-se</button>
                <button class="reportar"><i class="fas fa-exclamation-circle"></i>Reportar</button>
            </div>
            
        </div>
        
@endsection