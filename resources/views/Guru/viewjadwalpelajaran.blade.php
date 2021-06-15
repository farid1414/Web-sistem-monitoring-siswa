@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','JADWAL PELAJARAN')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/guru.css">
<link rel="stylesheet" href="/css/tabelbaru.css">
@section('content')
     <div class="container">
         <div class="judul">
            <p> Jadwal Pelajaran Kelas {{$data_kelas->nama_kelas}}</p> 
         </div>
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
                <th><span>Kode Mapel</span></th>
                <th><span>Mata Pelajaran</span></th>
                <th><span>Hari</span></th>
                <th><span>Jam Mulai</span></th>
                <th><span>Jam Selesai</span></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data_kelas->mapel as $ml)
            <tr>
                    <td>{{$ml->kode_mapel}}</td>
                    <td>{{$ml->nama_mapel}}</td>
                    <td>{{$ml->pivot->hari}}</td>                       
                    <td>{{$ml->pivot->jam_mulai}}</td>
                    <td>{{$ml->pivot->jam_selesai}}</td>                            
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