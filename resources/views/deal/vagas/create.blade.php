@extends('layouts.main')

@section('title', 'Nova vaga')

@section('content')

    <div class="main">

        <div class="card default-radius">
            <div class="card-body">
                <form id="form_create_vaga">
                    <div class="vaga_photo_container">
                        <div class="photo-container">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="btn-avatar-group">
                            <h4>Vaga de {{ Auth::user()->name }}</h4>
                            <p></p>
                        </div>
                    </div>

                    <h3 class="subtitle mb-0">Descreva a vaga</h3>

                    <div class="between"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="titulo">Título da vaga</label>
                                <input type="text" class="form-control form-control-sm" name="titulo" id="titulo"
                                    placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" name="descricao" id="descricao" rows="2" required></textarea>
                                <small class="form-text text-muted">Ajude às pessoas a entender melhor sobre a sua
                                    demanda!</small>
                            </div>
                        </div>
                    </div>

                    <h3 class="subtitle mb-0 mt-4">Quais são os requisitos de sua vaga?</h3>

                    <div class="between"></div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="habilidades">Habilidades necessárias</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="habilidades" id="habilidades" placeholder="Adicione uma habilidade" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" id="add_ability" type="button" disabled="true">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <ul id="abilities"></ul>
                    </div>

                    <h3 class="subtitle mb-0 mt-4">Até quando estarão abertas as inscrições?</h3>

                    <div class="between"></div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="from-group">
                                <div class="startDate">
                                    <label for="start_date">Data de inicio</label>
                                    <input type="date" class="mb-5 form-control" id="start_date" name="start_date" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="from-group">
                                <div class="date">
                                    <label for="data_de_expiracao">Data limite</label>
                                    <input type="date" class="mb-5 form-control" name="data_de_expiracao" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-submit-custom">Salvar</button>
                </form>
            </div>
        </div>
    </div>

    

@endsection

@section('scripts')
    <script src="{{ asset('deal/js/vagas/create.js') }}"></script>
@endsection
