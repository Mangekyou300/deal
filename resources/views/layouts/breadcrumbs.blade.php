
{{-- breadcrumb dashboard --}}
@if(Route::is('home'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/dashboard">Home</a></li>
        </ul>
        <div class="logo"><img class="img_logo" src="{{ asset('deal/image/deal_logo_transparente.png') }}"></div>
    </div>
{{-- end breadcrumb dashboard --}}

{{-- breadcrumb perfis de usuarios e contratantes--}}
@elseif(Route::is('perfil_user' || 'perfil_contractor'))

    <div class="breadcrumbs">
        <ul>
            <li><a href="/dashboard">Home</a></li>
            <li class="bc_color_custom"><i class="fas fa-angle-double-right"></i></li>
            <li><a href="/perfil">Perfil</a></li>
        </ul>
    </div>
{{-- end breadcrumb perfil --}}

@endif

