<!--nav <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">Halaman Home</h1>
        <p class="lead">Halaman ini merupakan halaman Home</p>
    </div>
</body>
</html> -->
@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluide">
    <div class="container">
    <h1 class="display-4">Home page</h1>
        <p class="lead">This is the home page</p>
    </div>
    <p> Nama : {{$nama}}</p>
    <p> Mata Pelajaran</p>
    <ul>
    @foreach($pelajaran as $p)
    <li> {{$p}} </li>
    @endforeach
    </div>
@endsection