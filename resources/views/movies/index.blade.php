@extends('layouts.main')

@section('main-content')
    <div class="container">
        <header class="my-5">
            <a href="{{ route('homepage') }}" class="btn btn-secondary">Indietro</a>
        </header>

        <main>
            <ul class="list-unstyled">
                @foreach ($movies as $movie)
                    <a href="{{ route('movies.show', $movie['id']) }}">
                        <li>{{ $movie['title'] }}</li>
                    </a>
                @endforeach
            </ul>
        </main>
    </div>
@endsection
