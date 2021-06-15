@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','List Absen')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/guru.css">
<link rel="stylesheet" href="/css/tabelbaru.css">
@section('content')
     <div class="container">
         <div class="judul" style="width:50%">
            <p> List Pengumpulan Absen Kelas {{$data_kelas->nama_kelas}}</p> 
         </div>
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th><span>Nama Mapel</span></th>
                <th><span>Lihat Absen</span></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data_kelas->mapel as $mapel)
            <tr>    
                    <td>{{$mapel->nama_mapel}}</td>
                    <td>
                    <a href="/Guru/{{$mapel->id}}/hasilabsen" class="btn btn-sm btn-primary">View Absensi</a>
                    </td>                                                                                      
                </tr>
                @endforeach
            <tr>
     </tbody>
    </table>
    </div>

<script>$(function(){
  $('#keywords').tablesorter(); 
});</script>
@endsection