@extends('layout.template')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DASHBOARD')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/dashboardicon.png">
<link rel="stylesheet" type="text/css" href="/css/dashboard.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Londrina+Solid&display=swap" rel="stylesheet">
@section('content')

<div class="container">
    <h1 class="judul">SELAMAT DATANG DI</h1>
    <h3 class="teks"><p> SISTEM MONITORING SISWA </p>
    <p>SMAN  SURABAYA</p>
    </h3>
    
<br><br><br>
    <h3 class="selamat">Selamat datang {{ auth()->user()->name }}</h3>
    
    @if(auth()->user()->level =='guru')
        <h5>Sebagai Guru</h5>
    @endif
</div>



@endsection