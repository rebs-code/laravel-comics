@extends('layouts.main')

@section('main')
<main class="main-container">
    <div class="container-large relative">
        <div class="title-label">
            <h3>Current Series</h3>
        </div>
    </div>
    <div class="bottom-container">
        <div class="container-large comics-container">
            @foreach ($comics as $comic)
            <div class="comic">
                <a href="">
                    <div class="comic-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="comic-title">
                        <h4>{{ $comic['title'] }}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        <button>Load More</button>
    </div>
</main>
@endsection
