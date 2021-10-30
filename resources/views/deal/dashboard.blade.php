@extends('layouts.main')

@section('title', 'Home')

    @section('content')

        
        <div class="main">
            <h1>Olá Candidato!</h1>

            @include('layouts.carousel-interest')

            {{-- Barra de separação --}}
            <div class="between"></div>
            {{-- End Barra de separação --}}

            @include('layouts.carousel-candidacy')
           
        </div>

    @endsection
