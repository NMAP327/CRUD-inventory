@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }} </p>
    <img src="img/{{ $image }}" alt="Car Rental" width="200">
@endsection