@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <h3>{{ $email}}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" srcset="" width="200">
    <script src="js/script.js"></script>
@endsection

       
