@extends('layout.templateuser')
@extends('layout.navbardashboard')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
@stop

<!-- untuk mengirimkan title ke template -->
@section('tittle','Nilai')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/view.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
@section('content')

<div class="container">
            @if(session('gagal'))
            <div class="alert alert-danger" role="alert">
                {{session('gagal')}}
            </div>
            @endif
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif

    <div class="judul">
        <form action="" class="form1" style="color:white">
            <fieldset>
            <div class="judulatas">
                <p>Data Diri Siswa</p>
            </div>
            <p>
            <label>Nama</label>
            <input type="text" style="color:white" value=":{{$data_siswa->nama_lengkap}}" readonly>
            </p>
            <p>
            <label>No Induk</label>
            <input type="text" style="color:white" value=":{{$data_siswa->no_induk}}" readonly>
            </fieldset>
        </form> 
    </div> 
</div>

    <div class="tabel">

        <!-- Tabel view Siswa -->
            <table class="table" cellpadding="150" cellspacing="117" style="width:60%;margin-left:20%; margin-top:4%;">
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6);color:white;" class="tabel1">
                            <th >Kode Mapel</th>
                            <th>Mata Pelajaran</th>
                            <th width="8%">Nilai Tugas</th>
                            <th width="8%">Nilai Uts</th>
                            <th width="8%">Nilai Uas</th>
                            <th width="">Total</th>
                            <th width="">Rata Rata</th>
                    </thead>
                    <tbody>
                        @foreach($data_siswa->mapel as $nl)
                        <tr class="pengguna" style="color:white">
                            <td>{{$nl->kode_mapel}}</td>
                            <td>{{$nl->nama_mapel}}</td>
                            <td>{{$nl->pivot->nilai}}</td>
                            <td>{{$nl->pivot->uts}}</td>
                            <td>{{$nl->pivot->uas}}</td>
                            <td>{{($nl->pivot->uts + $nl->pivot->uas + $nl->pivot->nilai)}}</td>
                            <td>{{($nl->pivot->uts + $nl->pivot->uas + $nl->pivot->nilai)/3}}</td>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
    </div>
                <!-- akhr tabel -->

        
     


@stop