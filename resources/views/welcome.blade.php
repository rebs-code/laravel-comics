@extends('layouts.main')

@section('main')
    <div class="main-container">
        <div class="container relative">
            <div class="title-label">
                <h3>Current Series</h3>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container comics-container">
                @foreach ($comics as $comic)
                    <div class="comic">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3 class="text-uppercase text-center">{{ $comic['series'] }}</h3>
                    </div>
                @endforeach
                <button>Load More</button>
            </div>
        </div>
    @endsection
