@extends('layouts.main')

@section('main')
    <main class="main-container">
        <div class="container relative">
            <div class="title-label">
                <h3>Current Series</h3>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container-large comics-container">
                @foreach ($comics as $comic)
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                @endforeach
                <button>Load More</button>
            </div>
    </main>
@endsection
