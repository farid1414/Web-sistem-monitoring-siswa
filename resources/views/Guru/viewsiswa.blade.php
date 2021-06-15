@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DAFTAR SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
@section('content')
<link rel="stylesheet" href="/css/cari.css">

<div class="container">
    <div class="judul" style="text-align:center; font-size:25px;font-weight:bold;font-family: 'Times New Roman', Times, serif;">
        <p>Data Siswa Kelas {{$data_kelas->nama_kelas}}</p>
    </div>
    <br>
    <!-- Tabel daftar siswa -->
     <table class="table" cellpadding="10" style="color:white;">
                <thead>
                    <tr class="tabel1">
                        <th>No</th>
                        <th width="">No Induk</th>
                        <th width="">Nama</th>
                        <th width="">Nilai</th>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach($data_kelas->siswa as $siswa)
                    <tr class="pengguna">
                        <td scope="row"> {{$no++}}</td>
                        <td>{{$siswa->no_induk}}</td>
                        <td>{{$siswa->nama_lengkap}}</td>
                        <td>
                            <a href="/Guru/{{$siswa->id}}/nilaisiswa"class="btn btn-sm btn-primary"><i class="fa fa-external-link"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
     </table>
            <!-- akhr tabel -->
</div>


@endsection

