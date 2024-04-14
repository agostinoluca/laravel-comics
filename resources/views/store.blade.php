@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        {{-- <img src="{{ Vite::asset('resources/images/{{ $comic['thumb'] }}') }}"> --}}
                        <img src="{{ Vite::asset('resources/images/adv.jpg') }}">
                        <h2>{{ $comic['title'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
