@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}">
                        <h2>{{ $comic['title'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
