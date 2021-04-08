<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA WALIKELAS')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
            <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                Tambah Data Wali Kelas
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
                        <th width="280px" scope="col" cellpadding="170">Id Guru</th>
                        <th width="310px" scope="col" cellpadding="170">Id Kelas</th>
                        <th width="310px" scope="col" cellpadding="170">Tahun Ajaran </th>
                        <th width="130px" style="padding-right:410px;" scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                    @foreach($data_wali as $wali)
                    <tr class="pengguna">
                        <td>{{$wali->guru_id}}</td>
                        <td>{{$wali->kelas_id}}</td>
                        <td>{{$wali->tahun}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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

<!-- modal untuk tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Wali Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/buatwalikelas" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="guru_id" class="form-label">Id Guru</label>
                        <input type="number" class="form-control" id="guru_id" name="guru_id">
                    </div>
                    <div class="mb-3">
                        <label for="kelas_id" class="form-label">Id Kelas</label>
                        <input type="number" class="form-control" id="kelas_id" name="kelas_id">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Ajaran</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
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


</div>
@endsection