@extends('layouts.main')

@section('title', 'Perfil')

    @section('content')

        @include('layouts.navbar')

        @include('layouts.breadcrumbs')

        <div class="main">
    
            @include('layouts.perfil_edit')

        </div>