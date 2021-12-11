@extends('layouts.main')

@section('title', 'Criar perfil')

@section('content')

    <div class="main">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <div class="card default-radius">
            <div class="card-body">
                <form action="{{ route('perfil.store') }}" method="post" enctype="multipart/form-data" id="form_create" name="create_perfil_contratante">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <h3 class="subtitle mb-0 text-center">{{ auth()->user()->name }}</h3>
                    <div class="perfil-photo-container">
                        <div class="photo-container">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="btn-avatar-group">
                            <label class="btn-input-avatar" for="avatar">Adicionar imagem</label>
                            <input type="file" name="avatar" id="avatar" placeholder="Adicione uma foto ao seu perfil"
                                aria-describedby="avatar">

                            <button class="btn-remove-avatar">Remover imagem</button>
                        </div>
                    </div>

                    <div class="row my-5">
                      <div class="col-md-12">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pf_pj" id="pf" value="pf" checked>
                          <label class="form-check-label" for="pf">
                            Pessoa Física
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pf_pj" id="pj" value="pj">
                          <label class="form-check-label" for="pj">
                            Pessoa Jurídica
                          </label>
                        </div>
                      </div>
                    </div>

                    <h3 class="subtitle mb-0">Queremos saber mais sobre você</h3>

                    <div class="between"></div>

                    <div class="row d-none" id="row_nome_fantasia">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nome_fantasia">Nome fantasia</label>
                          <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Insira o nome fantasia da organização." value="{{ auth()->user()->name }}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sobre_mim">Sobre mim</label>
                                <textarea class="form-control" name="sobre_mim" id="sobre_mim" rows="5"></textarea>
                                <small class="form-text text-muted">Ajude às pessoas a te conhcerem melhor!</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cpf_cnpj">CPF</label>
                                <input type="text" class="form-control" name="cpf_cnpj" id="cpf_cnpj"
                                    placeholder="Informe o CPF" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dt_nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" name="dt_nascimento" id="dt_nascimento" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefone">Contato 1</label>
                                <input type="text" class="form-control" name="telefone" id="telefone"
                                    placeholder=" (99) 99999-9999">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefone2">Contato 2</label>
                                <input type="text" class="form-control" name="telefone2" id="telefone2"
                                    placeholder=" (99) 99999-9999">
                            </div>
                        </div>
                    </div>

                    <h3 class="subtitle mb-0 mt-4">Informe-nos seu endereço</h3>

                    <div class="between"></div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="Informe o CEP"
                                    >
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro"
                                    placeholder="Informe o seu logradouro" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="numero">Número </label>
                                <input type="text" class="form-control" name="numero" id="numero" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="bairro">Bairro</label>
                              <input type="text" class="form-control" name="bairro" id="bairro">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="cidade"
                                    placeholder="Informe a cidade" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="uf">UF</label>
                                <input type="text" class="form-control" name="uf" id="uf" >
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
    <script src="{{ asset('deal/js/features/autofillAdress.js') }}"></script>
    <script src="{{ asset('deal/js/features/masks.js') }}"></script>
    <script src="{{ asset('deal/js/perfil/create.js') }}"></script>
@endsection
