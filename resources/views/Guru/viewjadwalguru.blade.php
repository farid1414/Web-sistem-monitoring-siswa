@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','JADWAL MENGAJAR')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/guru.css">
<link rel="stylesheet" href="/css/tabelbaru.css">
@section('content')
     <div class="container">
         <div class="judul-guru">
            <p> Jadwal Mengajar </p>
            <p>Nama Guru: {{$data_guru->nama_tendik}}</p> 
         </div>       
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0" style="width:10%;">
            <thead>
            <tr>
                <th><span>Kode Mapel</span></th>
                <th><span>Mata Pelajaran</span></th>
                <th><span>Hari</span></th>
                <th><span>Jam Mulai</span></th>
                <th><span>Jam Selesai</span></th>
                <th><span>Kelas</span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data_guru->mapel as $mapel)
                <tr class="pengguna">
                    <td>{{$mapel->kode_mapel}}</td>
                    <td>{{$mapel->nama_mapel}}</td>
                    <td>{{$mapel->pivot->hari}}</td>
                    <td>{{$mapel->pivot->jam_mulai}}</td>
                    <td>{{$mapel->pivot->jam_selesai}}</td>
                    <td>{{$mapel->pivot->kelas}}</td>
                </tr>
            @endforeach
     </tbody>
    </table>
    </div>

<script>$(function(){
  $('#keywords').tablesorter(); 
});</script>
@endsection