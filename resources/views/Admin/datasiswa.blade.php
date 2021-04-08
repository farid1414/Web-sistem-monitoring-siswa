<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA SISWA')
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
            <form method="get" action="/Admin/datasiswa">
                <button class="button" type="submit">Cari</button>
                <input class="search" type="search" name="mencari" placeholder="Search..." aria-label="Search">
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
                        <th>No</th>
                        <th width="100px">No Induk</th>
                        <th width="300px">Nama Lengkap</th>
                        <th>Nama panggilan</th>
                        <th width="100px">Tempat lahir</th>
                        <th width="300px">tgl lahir</th>
                        <th>Jenis_kelamin</th>
                        <th width="170px">Kelas</th>
                        <th>agama</th>
                        <th width="350px">alamat</th>
                        <th>nama ortu</th>
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
                        <td>{{$siswa->tempat_lahir}}</td>
                        <td>{{$siswa->tgl_lahir}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->kelas}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>{{$siswa->nama_ortu}}</td>
                        <td>
                            <a href="/Admin/{{$siswa->id}}/editsiswa" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="/Admin/{{$siswa->id}}/hapussiswa" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data {{$siswa->nama_lengkap}}')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- akhr tabel -->
        </div>
    </main>
</div>

<!-- modal untuk tambah data siswa-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/buatakun" method="POST" >
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="no_induk" class="form-label">No Induk</label>
                        <input type="text" class="form-control" id="no_induk" name="no_induk">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="nama_panggilan" class="form-label">Nama panggilan</label>
                        <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
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
                        <label for="agama" class="form-label">agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ortu" class="form-label">Orang tua</label>
                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
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