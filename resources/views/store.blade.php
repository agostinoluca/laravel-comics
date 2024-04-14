@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <h2>{{ $comic['title'] }}</h2>
    @endforeach
@endsection
