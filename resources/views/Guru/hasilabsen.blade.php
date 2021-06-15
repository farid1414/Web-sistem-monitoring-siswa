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
            <p> Mata Pelajaran {{$data_mapel->nama_mapel}}</p> 
         </div>
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th><span>Nama Siswa</span></th>
                <th><span>Mata Pelajaran</span></th>
                <th><span>Status</span></th>
                <th><span>Alasan</span></th>
                <th><span>Waktu</span></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data_mapel->absen as $absen)
            <tr>    
                    <td>{{$absen->nama}}</td>                                                        
                    <td>{{$absen->mapel->nama_mapel}}</td>
                    <td>{{$absen->status}}</td>
                    <td>{{$absen->alasan}}</td>
                    <td>
                    {{ \Carbon\Carbon::parse($absen->created_at)->diffForHumans() }}
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