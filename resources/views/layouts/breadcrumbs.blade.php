
{{-- breadcrumb --}}
@if(Route::is('home'))

    <div class="breadcrumbs">
        <ul>
            <li><span><i class="fas fa-home"></i> Home</span></li>
        </ul>
        <div class="logo"><img class="img_logo" src="{{ asset('deal/image/logos/deal-logo-com-vermelho-transparente-cortado.png') }}"></div>
    </div>
{{-- end breadcrumb --}}

{{-- breadcrumb perfis de usuarios --}}
@elseif(Route::is('perfil_user'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-user-circle"></i> Perfil</span></li>
        </ul>
    </div>
{{-- end breadcrumb perfil usuarios --}}

{{-- breadcrumb perfis de contratantes --}}
@elseif(Route::is('perfil_contractor'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-user-circle"></i> Perfil</span></li>
        </ul>
    </div>
{{-- end breadcrumb perfil contratantes --}}

{{-- breadcrumb perfis de usuarios e contratantes--}}
@elseif(Route::is('vagas'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-user-tie"></i> Vagas</span></li>
        </ul>
    </div>
{{-- end breadcrumb perfil --}}
{{--  breadcrumb candidaturas --}}
@elseif(Route::is('candidaturas'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-id-card"></i> Candidaturas</span></li>
        </ul>
    </div>
{{-- end breadcrumb candidaturas --}}
{{-- breadcrumb vaga_de_emprego --}}
@elseif(Route::is('vaga_de_emprego'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><a href="/vagas"><i class="fas fa-user-tie"></i> Vagas</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-id-card"></i> Vaga de Emprego</span></li>
        </ul>
    </div>
{{-- end breadcrumb vaga_de_emprego --}}

@endif