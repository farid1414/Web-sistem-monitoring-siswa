@extends('layout.template')
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','ADMIN')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<!-- link untuk css -->
<link rel="stylesheet" href="\css\dashboardadmin.css">

<!-- link untuk google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&family=Oswald&display=swap" rel="stylesheet">
<h1 class="judul"> Selamat Datang {{ auth()->user()->name }} </h1>



    <div class="row">
        <div class="dashboard">
            <img class="icon" src="/gambar/iconguru.png" alt="" width="75px">
            <div class="text">
                <p>Total Jumlah Guru</p>
            </div>
            <div class="total">
                {{$data_tendik->count()}}
            </div>
        </div>
        <div class="dashboard">
            <img class="icon" src="/gambar/iconsiswa.png" alt="" width="75px">
            <div class="text">
                <p>Total Jumlah Siswa</p>
            </div>
            <div class="total">
                {{$siswa->count()}}
            </div>
        </div>
    </div>    


</div>  
@endsection