@extends('layouts.main')

@section('title, Vaga de Emprego')

    @section('content')

        <div class="main">
            <div class="titulo_vaga_de_emprego">
                <h3>Título da vaga</h3>
            </div>
            <div class="info_vagas_de_emprego">
                <div class="icon_vaga_de_emprego">
                     <i class="fas fa-gavel"></i>
                </div>
                <div class="edit_vagas_de_emprego">
                    <ul>
                    <li><span><b>Contratante:</b>Nome do Contratante</span></li>
                    <li><span><b>Endereço:</b>Endereço do local</span></li>
                    <li><span><b>Tipo de Serviço: </b><span class="job_type">Tipo de trabalho</span></span></li>
                    <li><span><b>Data Final de Candidatura:</b>DD/MM/AAAA</span></li>
                    </ul>
                </div>
            </div>
            <div class="titulo_vaga_de_emprego">
                <h3>Descrição da Vaga</h3>
            </div>
            <div class="txt_vaga_de_emprego subitens_vaga_de_emprego">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aperiam eligendi, itaque vero aliquam officiis pariatur saepe laudantium quo harum rerum expedita est alias iusto illo dolor! Rerum vero obcaecati maiores repellendus, placeat totam reprehenderit a. Non rerum tenetur explicabo cupiditate, dicta earum aliquam suscipit sit.</span>
            </div>
            <div class="between"></div>
            <div class="titulo_vaga_de_emprego">
                <h3>Requisitos</h3>
            </div>
            <div class="requisitos_vaga_de_emprego subitens_vaga_de_emprego">
                <ul>
                    <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 1</li>
                    <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 2</li>
                    <li><span class="mr-1 direction_color_custom"><i class="fas fa-angle-double-right"></i></span>Habilidade 3</li>
                </ul>
            </div>
            <div class="between"></div>
            <div class="titulo_vaga_de_emprego">
                <h3>Palavras Chave</h3>
            </div>
            <div class="key_word_vaga_de_emprego">
                <ul>
                    <li class="key_vaga_de_emprego">Palavra Chave</li>
                    <li class="key_vaga_de_emprego">Palavra Chave</li>
                    <li class="key_vaga_de_emprego">Palavra Chave</li>
                </ul>
            </div>
        </div>
        
@endsection