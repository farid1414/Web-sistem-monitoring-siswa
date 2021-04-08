<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA KELAS')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
            <!-- Tombol tambah data  -->
            <!-- <button type="button" class="btn btn-primary"  style="margin-top:10px;">
                Tambah Data Wali kelas
            </button> -->
            <!-- akhir tombol tambah -->
            <!-- tombol import data -->
            <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importdata" style="margin-top:10px;">
                Import Data
            </button> -->


            <!-- menu cari -->
            <!-- <form method="get" action="/Admin/datatendik">
                <button class="button" type="submit">Cari</button>
                <input class="search" type="search" name="cari" placeholder="Search..." aria-label="Search">
            </form> -->
            <!-- akhir menu cari -->

            <!-- alert sukes data ditambah -->
            <br><br>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <!-- akhir alert -->

            <!-- Tabel tenaga pendidikan -->
            <table class="table" cellpadding="10">
                <thead>
                    <tr class="tabel1">
                        <th width="180px" scope="col" cellpadding="170">ID Kelas</th>
                        <th width="210px" scope="col" cellpadding="170">Kelas</th>
                        <th width="410px" scope="col" cellpadding="170">Wali Kelas</th>
                        <th width="110px" scope="col" cellpadding="170">Tahun Ajaran</th>
                        <th width="330px"  scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                    @foreach($data_kelas as $kelas)
                    <tr class="pengguna">
                        <td>{{$kelas->id}}</td>
                        <td>{{$kelas->nama_kelas}}</td>
                        <td>@foreach($kelas->guru as $guru)
								{{$guru->nama_tendik}}
							@endforeach</td>
                        <td>@foreach($kelas->guru as $guru)
								{{$guru->pivot->tahun}}
							@endforeach</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- akhr tabel -->
        </div>
    </main>
</div>


</div>
@endsection