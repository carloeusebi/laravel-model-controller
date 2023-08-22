@extends('layouts.main')


@section('main-content')
    <div class="container">
        <h1 class="text-center my-5">Our movies list</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie['title'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection
