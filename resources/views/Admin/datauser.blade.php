<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA USER EMAIL')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main class="container">
        <div class="container-fluid">
        
            <span>*Level kosong</span>
            <!-- Tabel tenaga User email siswa guru dan orang tua -->
            <table class="table" cellpadding="10">
                <thead>
                    <tr class="tabel1">
                        <th scope="col">No</th>
                        <th width="280px" scope="col" cellpadding="170">Id User</th>
                        <th width="810px" scope="col" cellpadding="170">Nama</th>
                        <th width="510px" scope="col" cellpadding="170">Email</th>
                        <th width="310px" scope="col" cellpadding="170">Level</th>
                        <th width="130px" style="padding-right:410px;" scope="col" cellpadding="170">Aksi</th>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach($data_user as $user)
                    <tr class="pengguna">
                        <td scope="row"> {{$no++}}</td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- akhir tabel -->
        </div>
    </main>
</div>

</div>
@endsection