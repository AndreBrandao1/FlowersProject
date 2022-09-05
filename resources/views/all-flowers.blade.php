@extends('layout)

@section('title', 'All-Flowers')

@section('content')
    <h2>Flowers List</h2>

    @foreach ($flowers as $flower)
        <p>{{ $flower->name }}</p>
        <p>{{ $flower->price }}</p>
    @endforeach
@endsection
