
{{-- parte de cima do perfil do usuario --}}
@if(Route::is('perfil.show'))

    <div class="perfil_edit">

        <div class="img_edit">
        @if ($perfil && Storage::disk('public')->exists($perfil->avatar))
            <img src="{{ asset("storage/$perfil->avatar") }}" alt="Imagem de perfil">
        @else
            <i class="far fa-user"></i>
        @endif

                </div>
        <div class="info_edit">
            <h2>{{ $perfil->nome_fantasia }}</h2>
            <ul class="star_color d-flex">
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
            </ul>
            <ul>
                <li><b>Idade:</b> {{ \Carbon\Carbon::parse($perfil->dt_nascimento)->diff(\Carbon\Carbon::now())->format('%y anos') }}</li>
                <li><b>Endereço:</b> {{ $perfil->logradouro }}, {{ $perfil->numero }}, {{ $perfil->complemento ? $perfil->complemento .',' : '' }} {{ $perfil->bairro }},  {{ $perfil->cidade }} - {{ $perfil->uf }}</li>
                <li><b>Sobre mim:</b> {{ $perfil->sobre_mim }}</li>
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