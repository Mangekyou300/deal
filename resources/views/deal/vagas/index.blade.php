@extends('layouts.main')

@section('title', 'Vagas')

    @section('content')

        <div class="main">

            @include('layouts.filterBar')

            <div class="container_vagas">
                <div class="container_vagas_header">
                    <h3 class="subtitle">Lista de Vagas</h3>
                    <a href="{{ route('vagas.create') }}" class="btn-nova-vaga">
                        <i class="fas fa-plus"></i>
                        Nova vaga
                    </a>
                </div>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga"><a href="/vaga_de_emprego">Titulo da vaga</a></span>
                        <span class="desc_vaga">breve descrição da vaga</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                    </div>
                    <div class="eye"> <span class="view_desc"><i class="fas fa-eye"></i></span></div>
                </div>
                <div class="between"></div>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga"><a href="/vaga_de_emprego">Titulo da vaga</a></span>
                        <span class="desc_vaga">breve descrição da vaga</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                    </div>
                    <div class="eye"> <span class="view_desc"><i class="fas fa-eye"></i></span></div>
                </div>
                <div class="between"></div>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga"><a href="/vaga_de_emprego">Titulo da vaga</a></span>
                        <span class="desc_vaga">breve descrição da vaga</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                    </div>
                    <div class="eye"> <span class="view_desc"><i class="fas fa-eye"></i></span></div>
                </div>
                <div class="between"></div>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga"><a href="/vaga_de_emprego">Titulo da vaga</a></span>
                        <span class="desc_vaga">breve descrição da vaga</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                    </div>
                    <div class="eye"> <span class="view_desc"><i class="fas fa-eye"></i></span></div>
                </div>
                <div class="between"></div>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga"><a href="/vaga_de_emprego">Titulo da vaga</a></span>
                        <span class="desc_vaga">breve descrição da vaga</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                        <span class="key_vaga">palavra chave</span>
                    </div>
                    <div class="eye"> <span class="view_desc"><i class="fas fa-eye"></i></span></div>
                </div>
            </div>
        </div>

    @endsection
