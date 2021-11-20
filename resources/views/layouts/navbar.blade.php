    {{-- Barra de navegação --}}
    <nav>
        <div class="nav-container">
            <div class="icons">
                <div class="img_user" id="on_click">
                    <i class="far fa-user" id="icon_perfil_user"></i>     
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
                    <a href="/perfil"><i class="far fa-user"></i></i>Perfil</a>
                    <div class="op_between"></div>
                    <a href="/"><i class="fas fa-cog"></i>Configurações</a>
                    <div class="op_between"></div>
                    <a href="{{ Auth::logout() }}"><i class="fas fa-sign-out-alt"></i>Sair</a>
                </div>
            </div>
            {{-- end menu escondido --}}  
            <div class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/vagas">Oportunidades</a></li>
                    <li><a href="/candidaturas">Candidaturas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Barra de navegação --}}
    