@extends('layout.template')
@extends('layout.Navbarguru')

<!-- untuk mengirimkan title ke template -->
@section('tittle','GURU')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<div id="layoutSidenav_content" style="background: url('/gambar/white1/4907157.jpg'); background-size:cover; background-repeat:no-repeat;">
    <main>
        <div class="container-fluid">
            <form>
                <input class="button" type="submit" value="Cari">
                <input class="search" type="text" placeholder="Search...">
            </form>
            <table class="table" cellpadding="10">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" cellpadding="170">NIS</th>
                        <th scope="col" cellpadding="170">Nama Siswa</th>
                        <th scope="col" cellpadding="170">Nilai UH1 </th>
                        <th scope="col" cellpadding="170">Nilai UH2</th>
                        <th scope="col" cellpadding="170">Nilai UH3</th>
                        <th scope="col" cellpadding="170">Nilai UTS</th>
                        <th scope="col" cellpadding="170">Nilai UH4</th>
                        <th scope="col" cellpadding="170">Niali UAS</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </main>
</div>
</div>
@endsection