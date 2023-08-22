@extends('layouts.main')

<main>
    <div class="container">
        <ul class="list-unstyled mt-5">
            @foreach ($movies as $movie)
                <a href="{{ route('movies.show', $movie['id']) }}">
                    <li>{{ $movie['title'] }}</li>
                </a>
            @endforeach
        </ul>
    </div>
</main>
