@extends('layouts.main')

@section('title', 'Vagas')

    @section('content')


        <div class="main">

            <div class="side_bar">
                <div class="left_bar">
                    <h2>Pesquise por vagas</h2>
                    <form action="">
                        <div class="form-checkbox">
                            <input type="checkbox" name="Freelance" id="free">
                            <label for="free">Freelance</label>
                        </div>
                        <div class="form-checkbox">
                            <input type="checkbox" name="Vagas de Emprego" id="vaga">
                            <label for="vaga">Vagas de Emprego</label>
                        </div>
                        <div class="text_camp">
                            <label>Palavra Chave</label>
                            <input type="text">
                        </div>
                        <div class="text_camp">
                            <label>Cidade</label>
                            <input type="text">
                        </div>
                        <button class="btn btn-primary btn_pesquisa">Pesquisar</button>
                    </form>
                </div>
                <div class="main_vagas_toggle_button">
                    <button class="vagas_toggle_button" onClick="toggleSideBar(event)"><i class="fas fa-chevron-left"></i></button>
                </div>
            </div>

            <div class="container_vagas">
                <h3 class="subtitle">Lista de Vagas</h3>
                <div class="main_vagas">
                    <div class="vagas">
                        <h5>Contratante</h5>
                        <span class="title_vaga">Titulo da vaga</span>
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
                        <span class="title_vaga">Titulo da vaga</span>
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
                        <span class="title_vaga">Titulo da vaga</span>
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
                        <span class="title_vaga">Titulo da vaga</span>
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
                        <span class="title_vaga">Titulo da vaga</span>
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
