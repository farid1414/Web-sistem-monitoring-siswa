@extends('layout.template')
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT DATA')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main>
        <H2>Edit Data</H2>
        <form action="/Admin/{{$data_tendik->id}}/ubah" method="POST">
            {{csrf_field()}}
            <div class="mb-1">
                <label for="nip" class="form-label">NIP</label>
                <input class="form-control" type="text" id="nip" name="nip" readonly value="{{$data_tendik->nip}}">
            </div>
            <div class="mb-3">
                <label for="nama_tendik" class="form-label">Nama Tendik</label>
                <input class="form-control" type="text" id="nama_tendik" name="nama_tendik" multiple style="width: 70rem;" value="{{$data_tendik->nama_tendik}}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">jenis kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option value="L" @if($data_tendik->jenis_kelamin =='L') selected @endif >Laki-Laki</option>
                    <option value="P" @if($data_tendik->jenis_kelamin =='P') selected @endif >Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir" type="date" value="{{$data_tendik->tgl_lahir}}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input class="form-control form-control-sm" id="alamat" name="alamat" type="text" value="{{$data_tendik->alamat}}">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">jabatan</label>
                <input class="form-control form-control-sm" id="jabatan" name="jabatan" type="text" value="{{$data_tendik->jabatan}}">
            </div>
            <div class="mb-3">
                <label for="tgl_diterima" class="form-label">tgl_diterima</label>
                <input class="form-control form-control-sm" id="tgl_diterima" name="tgl_diterima" type="date" value="{{$data_tendik->tgl_diterima}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>
</div>
</div>
@endsection