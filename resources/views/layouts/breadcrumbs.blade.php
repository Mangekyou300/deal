
{{-- breadcrumb --}}
@if(Route::is('home'))

    <div class="breadcrumbs">
        <ul>
            <li><span><i class="fas fa-home"></i> Home</span></li>
        </ul>
        <div class="logo"><img class="img_logo" src="{{ asset('deal/image/deal_logo_transparente.png') }}"></div>
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

@elseif(Route::is('candidaturas'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><span><i class="fas fa-id-card"></i> Candidaturas</span></li>
        </ul>
    </div>

@endif