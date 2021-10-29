
{{-- parte de cima do perfil do usuario --}}
@if(Route::is('perfil_user'))

    <div class="perfil_edit">
        <div class="img_edit">
            <i class="far fa-user"></i>
        </div>
        <div class="info_edit">
            <h2>Nome do Usuário</h2>
            <ul class="d-flex star_color">
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
            </ul>
            <ul>
                <li><b>Idade:</b> 28 anos</li>
                <li><b>Cidade:</b> Barra Mansa</li>
                <li><b>Sobre mim:</b> Uma curta descrição sobre o usuário</li>
            </ul>
        </div>
    </div>
{{-- end parte de cima do perfil do usuario --}}

{{-- parte de cima do perfil do contratante --}}
@elseif(Route::is('perfil_contractor'))

    <div class="perfil_edit">
        <div class="img_edit">
            <i class="far fa-user"></i>
        </div>
        <div class="info_edit">
            <h2>Nome do Contratante</h2>
            <ul class="d-flex star_color">
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
            </ul>
            <ul>
                <li><b>Idade:</b> 28 anos</li>
                <li><b>Cidade:</b> Barra Mansa</li>
                <li><b>Sobre mim:</b> Uma curta descrição sobre o Contratante</li>
            </ul>
        </div>
    </div> 
{{-- end parte de cima do perfil do contratante --}}

@endif