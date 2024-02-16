@extends('layout.main')

@section('container')
<a href="/kelas/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h2>Detail Jumlah Siswa {{$kelas->nama_kelas}} </h2>


@endsection