<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA MAPEL')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
            <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahmapel" style="margin-top:10px;">
                Tambah Data Mapel
            </button>
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
                        <th scope="col">No</th>
                        <th width="280px" scope="col" cellpadding="170">Kode Mata Pelajaran</th>
                        <th width="310px" scope="col" cellpadding="170">Mata Pelajaran</th>
                        <th width="130px" style="padding-right:410px;" scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach($data_mapel as $mapel)
                    <tr class="pengguna">
                        <td scope="row"> {{$no++}}</td>
                        <td>{{$mapel->kode_mapel}}</td>
                        <td>{{$mapel->nama_mapel}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="Admin/{{$mapel->id_mapel}}/hapusmapel" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- akhr tabel -->
        </div>
    </main>
</div>

<!-- modal untuk tambah data mapel-->
<div class="modal fade" id="tambahmapel" tabindex="-1" aria-labelledby="tambahmapelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahmapelLabel">Tambah Data Mapel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/buatmapel" method="POST" >
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="kode_mapel" class="form-label">Kode Mapel</label>
                        <input type="text" class="form-control" id="kode_mapel" name="kode_mapel">
                    </div>
                    <div class="mb-3">
                        <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir dari modal tambah data siswa -->



</div>
@endsection