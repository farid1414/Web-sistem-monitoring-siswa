@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@section('tittle','ABSENSI')
<link rel="stylesheet" href="/css/absen">

@section('content')
<link rel="stylesheet" type="text/css" href="/css/absen.css">
<div class="testbox">
          @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
      <form action="/Siswa/addabsen" method="POST">
      {{csrf_field()}}
        <div class="banner">
          <h1>Absensi </h1>
        </div>
        <div class="item">
          <p>Nama</p>
          <input type="text" name="nama" value="{{auth()->user()->name}}" readonly />
        </div>
        <div class="item">
          <label for=""><p>Email</p></label>
          <input type="email" name="email" />
        </div>
        <div class="item">
          <label for=""><p>Id Kelas</p></label>
          <input type="text" name="nama" value="{{auth()->user()->kelas->id}}" readonly />
        </div>
        <div class="item">
          <label for=""><p>Mata Pelajaran</p></label>
          <select name="mapel">
          @foreach($mapel as $mapel)
            <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
          @endforeach
          </select>
        </div>
        <div class="question">
          <p>Status</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="Hadir" id="radio_1" name="status" />
              <label for="radio_1" class="radio"><span>Hadir</span></label>
            </div>
            <div>
              <input type="radio" value="Izin" id="radio_2" name="status" />
              <label for="radio_2" class="radio"><span>Izin</span></label>
            </div>
          </div>
        <div class="item">
          <p>Alasan Izin</p>
          <textarea name="alasan" id="alasan" cols="3" rows="3"></textarea>
        </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">SEND</button>
        </div>
      </form>
    </div>

@endsection