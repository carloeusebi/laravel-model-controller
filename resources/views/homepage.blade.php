@extends('layouts.main')


@section('main-content')
    <div class="container">
        <div class="text-center mt-5">
            <h1 class="mb-5">Almost there! Click on the link below</h1>
            <a href="{{ route('movies.index') }}">Go to movies</a>
        </div>
    </div>
@endsection
