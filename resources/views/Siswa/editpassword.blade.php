@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT PASSWORD')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconsiswa.png">
@section('content')
<style>
    .card{
        width:60%;
        margin-top:6%;
        margin-left:20%;
        
    }
    label{
        font-size:20px;
        font-family: 'Times New Roman', Times, serif;
        margin-left:2%;
    }
    .form-control{
        width:80%;
        margin-left:2%;
        background-color:rgb(211, 211, 211,0.4);
    }
    .btn{
        margin-right:2%;
        margin-bottom:2%;
    }
    p{
        font-family: monospace;
        text-align:center;
        font-size:30px;
        font-weight:bold;
    }
</style>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            @if(session('gagal'))
            <div class="alert alert-danger" role="alert">
                {{session('gagal')}}
            </div>
            @endif
        <div class="card">
                <p>Ganti Password</p>
            <form action="/Siswa/{{auth()->user()->id}}/ubahpassword" method="POST" >
                {{csrf_field()}}
                    <div class="mb-3">  
                        <label for="password" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" name="password">
                    </div>  
                    <div class="mb-3{{$errors->has('passwordbaru') ? 'has-error' : ''}}">
                        <label for="tugas" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="tugas" name="passwordbaru" >
                        @if($errors->has('passwordbaru'))
                            <span class="help-block">{{$errors->first('passwordbaru')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">RESET</button>
                    </div>
            </form>
        </div>

@endsection