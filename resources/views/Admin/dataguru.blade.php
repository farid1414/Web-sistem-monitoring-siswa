<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA GURU')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<!-- Css untuk menu pencarian -->
<link rel="stylesheet" href="/css/cari.css">
<link rel="stylesheet" href="/css/tabel.css">

<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
            <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                Tambah Data
            </button>
            <!-- akhir tombol tambah -->

            <!-- menu cari -->
            <form method="get" action="/Admin/dataguru">
                <button class="button" type="submit">Cari</button>
                <input class="search" type="search" name="cari" placeholder="Search..." aria-label="Search">
            </form>
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
                        <th>Id Guru</th>
                        <th width="20px" scope="col" cellpadding="170">NIP</th>
                        <th width="350px" scope="col" cellpadding="170">Nama Guru</th>
                        <th width="150px" scope="col" cellpadding="170">User id Email</th>
                        <th scope="col" cellpadding="170">JK</th>
                        <th width="220px" scope="col" cellpadding="170">Tanggal lahir </th>
                        <th width="350px" scope="col" cellpadding="170">Alamat</th>
                        <th width="150px" scope="col" cellpadding="170">Tanggal diterima</th>
                        <th width="200px" scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                    
                    @foreach($data_guru as $guru)
                    <tr class="pengguna">
                        <td scope="row">{{$guru->id}} </td>
                        <td>{{$guru->nip}}</td>
                        <td>{{$guru->nama_tendik}}</td>
                        <td>{{$guru->user_id}}</td>
                        <td>{{$guru->jenis_kelamin}}</td>
                        <td>{{$guru->tgl_lahir}}</td>
                        <td>{{$guru->alamat}}</td>
                        <td>{{$guru->tgl_diterima}}</td>
                        <td>
                            <a href="/Admin/{{$guru->id}}/edit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="/Admin/{{$guru->id}}/hapus" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data {{$guru->nama_tendik}}')"><i class="fa fa-trash"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/create" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nip" class="form-label">Nip</label>
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                    <div class="mb-3">
                        <label for="nama_tendik" class="form-label">Nama Tendik</label>
                        <input type="text" class="form-control" id="nama_tendik" name="nama_tendik">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">tgl lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_diterima" class="form-label">Tgl Diterima</label>
                        <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima">
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