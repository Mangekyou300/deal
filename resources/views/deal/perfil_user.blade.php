@extends('layouts.main')

@section('title', 'Perfil')

    @section('content')

        
        <div class="main">
    
            @include('layouts.perfil_edit')

            <div class="org_perfil">
                <div class="skills">
                    <h3 class="subtitle_perfil">Habilidades</h3>
                    <div class="between"></div>
                    <ul>
                        <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 1</li>
                        <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 2</li>
                        <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 3</li>
                    </ul>
                </div>

                <div class="exp">
                    <h3 class="subtitle_perfil">Experiências Profissionais</h3>
                    <div class="between"></div>
                    <ul>
                        <li class="exp_emp">Empresa</li>
                        <li>função exercida</li>
                        <li>data de inicio - data fim</li>
                    </ul>
                    <div class="exp_between"></div>
                    <ul>
                        <li class="exp_emp">Empresa</li>
                        <li>função exercida</li>
                        <li>data de inicio - data fim</li>
                    </ul>
                </div>

                <div class="keyword">
                    <h3 class="subtitle_perfil">Palavra chave</h3>
                    <div class="between"></div>
                    <ul>
                        <li class="key">Desenvolvedor</li>
                        <li class="key">Tecnico de TI</li>
                        <li class="key">Computação</li>
                    </ul>
                </div>
            </div>
            

        </div>

    @endsection


