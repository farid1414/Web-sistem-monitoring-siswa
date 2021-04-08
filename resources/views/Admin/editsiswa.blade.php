@extends('layout.template')
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT DATA SISWA')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main>
        <H2>Edit Data</H2>
        <form action="/Admin/{{$data_siswa->no_induk}}/ubahsiswa" method="POST">
            {{csrf_field()}}
            <div class="mb-1">
                <label for="no_induk" class="form-label">No Induk</label>
                <input class="form-control" type="text" id="no_induk" name="no_induk" readonly value="{{$data_siswa->no_induk}}">
            </div>
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" multiple style="width: 70rem;" value="{{$data_siswa->nama_lengkap}}">
            </div>
            <div class="mb-3">
                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                <input class="form-control" type="text" id="nama_panggilan" name="nama_panggilan" multiple style="width: 70rem;" value="{{$data_siswa->nama_panggilan}}">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" multiple style="width: 70rem;" value="{{$data_siswa->tempat_lahir}}">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir" type="date" value="{{$data_siswa->tgl_lahir}}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">jenis kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option value="L" @if($data_siswa->jenis_kelamin =='Laki-laki') selected @endif >Laki-Laki</option>
                    <option value="P" @if($data_siswa->jenis_kelamin =='Perempuan') selected @endif >Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">kelas</label>
                <input class="form-control form-control-sm" id="kelas" name="kelas" type="text" value="{{$data_siswa->kelas}}">
            </div>
            <div class="mb-3">
                <label for="nama_ortu" class="form-label">nama_ortu</label>
                <input class="form-control form-control-sm" id="nama_ortu" name="nama_ortu" type="text" value="{{$data_siswa->nama_ortu}}">
            </div>
            
            <button style="float:right;" type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>
</div>
</div>
@endsection