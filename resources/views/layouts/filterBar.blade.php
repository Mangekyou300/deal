{{-- filtros --}}

@if (Route::is('vagas'))
    
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
        <div class="main_toggle_button">
            <button class="vagas_toggle_button" onClick="toggleSideBar(event)"><i class="fas fa-chevron-left"></i></button>
        </div>
    </div>

    @elseif (Route::is('candidaturas'))

    <div class="side_bar">
        <div class="left_bar">
            <h2>Filtrar</h2>
            <form action="">
                <div class="form-checkbox">
                    <input type="checkbox" name="Freelance" id="free">
                    <label for="free">Freelance</label>
                </div>
                <div class="form-checkbox">
                    <input type="checkbox" name="Vagas de Emprego" id="vaga">
                    <label for="vaga">Vagas de Emprego</label>
                </div>
                <div class="form-checkbox">
                    <input type="checkbox" name="Ativo" id="ativo">
                    <label for="ativo">Ativo</label>
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
        <div class="main_toggle_button">
            <button class="vagas_toggle_button" onClick="toggleSideBar(event)"><i class="fas fa-chevron-left"></i></button>
        </div>
    </div>

    @endif