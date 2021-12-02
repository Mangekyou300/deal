@extends('layouts.main')

@section('title', 'Nova vaga')

@section('content')

    <div class="main">

        <div class="card default-radius">
            <div class="card-body">
                <form action="{{ route('vagas.store') }}" method="post">
                    @csrf
                    <div class="vaga_photo_container">
                        <div class="photo-container">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="btn-avatar-group">
                            <div class="form-group">
                                <label for="titulo" class="subtitle">Título</label>
                                <input type="text" class="form-control form-control-sm" name="titulo" id="titulo"
                                    placeholder="">
                            </div>
                        </div>
                    </div>

                    <h3 class="subtitle mb-0">Descreva a vaga</h3>

                    <div class="between"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" name="descricao" id="descricao" rows="2"></textarea>
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
                                        <button class="btn btn-outline-secondary" id="add_ability" type="button">
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

                    <button type="submit" class="btn btn-submit-custom">Salvar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('deal/js/vagas/create.js') }}"></script>
@endsection
