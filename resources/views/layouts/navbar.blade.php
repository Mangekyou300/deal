    {{-- Barra de navegação --}}

    {{-- tenta localizar o perfil do usuário --}}
    @php 
        $perfil = auth()->user()->perfil()->first(); 

    @endphp


    <nav>
        <div class="nav-container">
            <div class="icons">
                <div class="img_user" id="on_click">
                    @if (Storage::disk('public')->exists($perfil->avatar))
                        <img src="{{ asset("storage/$perfil->avatar") }}" alt="Imagem de perfil" id="icon_perfil_user">
                    @else
                        <i class="far fa-user" id="icon_perfil_user"></i>
                    @endif
                </div>
                <div class="chat">
                    <a href="/">
                        <i class="fas fa-comments"></i>
                    </a>
                </div>
                <div class="bell">
                    <a href="/perfil/2">
                        <i class="fas fa-bell"></i>
                    </a>
                </div>
            </div>
            {{-- menu escondido --}}
            <div class="user_click hidden">
                <div class="user_click_op">

                    <a href="{{ $perfil ? route('perfil.show', $perfil->id) : route('perfil.create') }}"><i class="far fa-user"></i></i>Perfil</a>
                    <div class="op_between"></div>
                    <a href="/"><i class="fas fa-cog"></i>Configurações</a>
                    <div class="op_between"></div>
                    <form class="form-btn-logout" method="post" action={{ route('logout') }}>
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i>Sair
                        </button>
                    </form>
                </div>
            </div>
            {{-- end menu escondido --}}

            {{-- Itens de navegação --}}
            <div class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('vagas') }}">Oportunidades</a></li>
                    <li><a href="/candidaturas">Candidaturas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Barra de navegação --}}
