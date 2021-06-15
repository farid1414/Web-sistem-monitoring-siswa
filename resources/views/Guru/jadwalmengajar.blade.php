@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','JADWAL MENGAJAR')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/cari.css">
@section('content')

<div class="container">
    <!-- Tabel tenaga guru -->
    <form method="get" action="/Guru/jadwalmengajar">
                <button class="button" type="submit">Cari</button>
                <input class="search" type="search" name="cariguru" placeholder="Cari nama guru" aria-label="Search">
    </form>
    <table class="table" cellpadding="10" style="margin-top:3%;">
                <thead>
                <tr class="tabel1" style="color:white;">
                        <th scope="col">No</th>
                        <th width="280px" scope="col" cellpadding="170">NIP</th>
                        <th width="510px" scope="col" cellpadding="170">Nama Guru</th>
                        <th width="310px" scope="col" cellpadding="170">Jadwal Mengajar</th>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                    @foreach($data_guru as $guru)
                    <tr class="pengguna" style="color:white">
                    <td scope="row"> {{$no++}}</td>
                    <td>{{$guru->nip}}</td>
                    <td>{{$guru->nama_tendik}}</td>  
                        <td style="">
                            <a href="/Guru/{{$guru->id}}/viewjadwalguru" style="font-weight:bold;" class="btn btn-sm btn-success">Jadwal</a>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- akhr tabel -->

</div>




@endsection
