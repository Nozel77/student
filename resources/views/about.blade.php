@extends('layout.main')

@section('container')
    <h2>Nama : {{ $name }}</h2>
    <h2>Nama : {{ $class }}</h2>
    <img src={{ $image }} alt="" class="w-25">

@endsection