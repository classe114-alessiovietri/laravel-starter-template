@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Laravel Start 1
            </h1>

            <h2>
                Ciao {{ $firstName }} {{ $lastName }}
            </h2>

            <div>
                <img class="gatto-img" src="{{ Vite::asset('resources/img/gatto.webp') }}" alt="Gatto">
            </div>

            <div class="gatto-bg">
                QUESTO DIV AVRA' COME SFONDO IL GATTO
            </div>
        </div>
    </div>
</div>
@endsection
