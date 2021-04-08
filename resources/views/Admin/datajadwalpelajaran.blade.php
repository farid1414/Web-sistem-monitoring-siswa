<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA JADWAL PELAJARAN)
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
            <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                Tambah Data
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
                        <th width="280px" scope="col" cellpadding="170">Nama Kelas</th>
                        <th width="310px" scope="col" cellpadding="170">Jadwal Pelajaran</th>
                        <th width="310px" scope="col" cellpadding="170">Jam Pelajaran</th>
                        <th width="310px" scope="col" cellpadding="170">Hari</th>
                        <th width="130px" style="padding-right:410px;" scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                    @foreach($data_kelas as $kelas)
                    <tr class="pengguna">
                    <td scope="row"> {{$no++}}</td>
                        <td>{{$kelas->nama_kelas}}</td>
                        <td>@foreach($kelas->mapel as $mapel)
								{{$mapel->nama_mapel}} <br>
                            @endforeach
							</td>
                        <td>@foreach($kelas->mapel as $mapel)
						{{$mapel->pivot->jam_pelajaran}} <br>
				    	@endforeach</td>

                        <td>@foreach($kelas->mapel as $mapel)
						{{$mapel->pivot->hari}} <br>
				    	@endforeach</td>
                        
                        <td style="">
                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus mapel"><i class="fa fa-trash"></i></a>
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