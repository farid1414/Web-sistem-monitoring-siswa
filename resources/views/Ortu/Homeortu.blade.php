@extends('layout.template')
@extends('layout.Navbarortu')

<!-- untuk mengirimkan title ke template -->
@section('tittle','ORTU')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<div class="container">
    <h1>Orang tua</h1>
    <h3>{{ auth()->user()->name }}</h3>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection