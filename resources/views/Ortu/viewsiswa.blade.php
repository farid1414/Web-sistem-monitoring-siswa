@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DAFTAR SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/.png">
<link rel="stylesheet" href="/css/tabelbaru.css">
@section('content')
     <div class="container">
         <div class="judul">
            <p> Daftar Siswa Kelas {{$data_kelas->nama_kelas}}</p> 
         </div>
     </div>       
    <div id="wrapper">
        <!-- tabel menampilakn jadwal pelajaran di guru -->
        <table id="keywords" cellspacing="0" cellpadding="0" style="width:100%;">
            <thead>
            <tr>
                <th><span>No Induk</span></th>
                <th><span>Nama</span></th>
                <th><span>Alamat</span></th>
                <th><span>Aksi</span></th>
            </tr>
            </thead>
            <tbody>
                @foreach($data_kelas->siswa as $siswa)
            <tr>
                    <td>{{$siswa->no_induk}}</td>
                    <td>{{$siswa->nama_lengkap}}</td>                       
                    <td>{{$siswa->alamat}}</td>
                    <td>
                        <a href="/Ortu/{{$siswa->id}}/raportsiswa" class="btn btn-primary">Lihat nilai siswa</a>
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