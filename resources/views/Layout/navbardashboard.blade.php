<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/boostrap/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Oswald:wght@500&display=swap" rel="stylesheet">



<style>
    .nav-link {
        color: white;
        font-size: 20px;
        font-family: 'Oswald', sans-serif;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#003333; height:80px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="color:white; margin-left:110px; font-family: 'Oswald', sans-serif;">
            <img src="/gambar/wuri.png" alt="" width="60" class="d-inline-block align-top">
            SISTEM MONITORING KEGIATAN SISWA
            <p class="text-center" style="margin-top: -33px; font-size:15px;">SMAN Surabaya</p>
        </a>
        <button class="navbar-toggler btn-danger" type="button" style="background-color:white; color:white;" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color:white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left:53%;">
                @if(auth()->user()->level =='siswa' || auth()->user()->level=='guru' || auth()->user()->level=='')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:18px;color:white;margin-top:8%;">
                    {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(auth()->user()->level =='siswa')
                    <li><a class="dropdown-item" href="/Siswa/{{auth()->user()->id}}/editpassword">Ganti Password</a></li>
                    @endif
                    @if(auth()->user()->level =='guru')
                    <li><a class="dropdown-item" href="/Guru/{{auth()->user()->id}}/editpassword">Ganti Password</a></li>
                    @endif
                    @if(auth()->user()->level =='')
                    <li><a class="dropdown-item" href="/Ortu/{{auth()->user()->id}}/editpassword">Ganti Password</a></li>
                    @endif
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link " style="color: white; font-size:45px;" aria-current="page" href="/dashboard"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="color: white; font-size:40px; margin-top:4px; padding-left:15px;" aria-current="page" href="{{route('logout')}}"><i class="fa fa-power-off"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>