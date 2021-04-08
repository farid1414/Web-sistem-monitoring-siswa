@extends('layout.template')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DAFTAR SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
@section('content')
<link rel="stylesheet" href="/css/cari.css">

<div class="container">
    <!-- menu cari -->
    <form method="get" action="/Admin/dataguru">
                <button class="button" type="submit">Cari</button>
                <input class="search" type="search" name="cari" placeholder="Search..." aria-label="Search">
    </form>
    <!-- akhir menu cari -->

    <!-- Tabel daftar siswa -->
     <table class="table" cellpadding="10">
                <thead>
                    <tr class="tabel1">
                        <th>No</th>
                        <th width="100px">No Induk</th>
                        <th width="300px">Nama Lengkap</th>
                        <th>Nama panggilan</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas </th>
                        <th>agama</th>
                        
                        <th width="230px">Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach($data_siswa as $siswa)
                    <tr class="pengguna">
                        <td scope="row"> {{$no++}}</td>
                        <td>{{$siswa->no_induk}}</td>
                        <td>{{$siswa->nama_lengkap}}</td>
                        <td>{{$siswa->nama_panggilan}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->kelas}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>
                            <a href="/Guru/{{$siswa->id}}/viewsiswa"class="btn btn-sm btn-primary"><i class="fa fa-external-link"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
     </table>
            <!-- akhr tabel -->
</div>
<br><br><br><br><br><br>

@endsection

