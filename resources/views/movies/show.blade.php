@extends('layouts.main')

@section('main-content')
    <div class="container">
        <header class="my-5">
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Indietro</a>
        </header>

        <main>
            <h4 class="text-center">{{ $movie['title'] }}</h4>
            <div class="row row-cols-3 my-5">
                <div class="col"></div>
                <ul class="col">
                    <li><span class="fw-bold">Titolo Originale: </span>{{ $movie['original_title'] }}</li>
                    <li><span class="fw-bold">Nazionalità: </span>{{ $movie['nationality'] }}</li>
                    <li><span class="fw-bold">Data d'uscita: </span>{{ $movie['date'] }}</li>
                    <li><span class="fw-bold">Voto: </span>{{ $movie['vote'] }}</li>
                </ul>
                <div class="col"></div>
            </div>
        </main>
    </div>
@endsection
