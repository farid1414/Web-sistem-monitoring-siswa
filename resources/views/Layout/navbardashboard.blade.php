<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/boostrap/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Oswald:wght@500&display=swap" rel="stylesheet">



<style>
    .nav-link {
        color: black;
        font-size: 20px;
        font-family: 'Oswald', sans-serif;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgb(0, 191, 255); height:80px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="color:black; margin-left:110px; font-family: 'Oswald', sans-serif;">
            <img src="/gambar/wuri.png" alt="" width="60" class="d-inline-block align-top">
            SISTEM MONITORING KEGIATAN SISWA
            <p class="text-center" style="margin-top: -33px; font-size:15px;">SMAN Surabaya</p>
        </a>
        <button class="navbar-toggler btn-danger" type="button" style="background-color: white;" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color:black;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 450px;">
                <li class="nav-item">
                    <a class="nav-link " style="color: black;" aria-current="page" href="/dashboard">Home</a>
                </li>
                @if(auth()->user()->level =='guru')
                <li class="nav-item">
                    <a class="nav-link " style="color: black;" aria-current="page" href="/Guru/Homeguru">Guru</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" style="color:black;" data-bs-toggle="dropdown" aria-expanded="false">
                        Siswa
                    </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/Guru/daftarsiswa">Daftar Siswa</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" style="color:black;" data-bs-toggle="dropdown" aria-expanded="false">
                        Mengajar
                    </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Jadwal Mengajar</a></li>
                    <li><a class="dropdown-item" href="#">Jadwal Pelajaran</a></li>
                    <li><a class="dropdown-item" href="#">Daftar Wali Kelas</a></li>
                </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link " style="color: black; font-size:30px;" aria-current="page" href="{{route('logout')}}"><i class="fa fa-power-off"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>