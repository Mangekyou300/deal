@extends('layouts.main')

@section('title', 'Home')

    @section('content')


        <div class="main">

            @php
                $name = explode(' ', auth()->user()->name)[0];
            @endphp

            <h2 class="subtitle mb-5">{{ __('Olá ') . $name }}!</h2>

            @include('layouts.carousel-interest')

            {{-- Barra de separação --}}
            <div class="between"></div>
            {{-- End Barra de separação --}}

            @include('layouts.carousel-candidacy')

        </div>

    @endsection
