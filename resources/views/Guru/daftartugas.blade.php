@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','List Tugas')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/guru.css">
<link rel="stylesheet" href="/css/tabelbaru.css">
@section('content')
     <div class="container">
         <div class="judul" style="width:50%">
            <p> List Pengumpulan tugas  Kelas {{$data_kelas->nama_kelas}}</p> 
         </div>
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th><span>Nama Siswa</span></th>
                <th><span>Mata Pelajaran</span></th>
                <th><span>Tugas</span></th>
                <th><span>Waktu</span></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data_kelas->tugas as $tugas)
            <tr>    
                    <td>{{$tugas->nama}}</td>                                                        
                    <td>{{$tugas->mapel}}</td>
                    <td>
                    <a href="/storage/{{$tugas->tugas}}" class="btn btn-sm btn-primary" style="margin-top:5px;">Detail tugas</a></td>
                    <td>
                    {{ \Carbon\Carbon::parse($tugas->created_at)->diffForHumans() }}
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