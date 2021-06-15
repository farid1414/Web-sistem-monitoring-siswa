<!doctype html>
<html lang="en">

<head>
    <title>@yield('tittle')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/boostrap/css/bootstrap.css">

    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Oswald:wght@500&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('header')
</head>
<style>
    *{
    padding: 0px;
	margin: 0px;
    }
    body{
        background: url("/gambar/bghitam.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    footer {
        background-color:#003333;
    }
</style>

<body>

    <header>
        <!-- untuk memanggil content yang ada di menu utama -->
        @yield('content')

    </header>


    <footer class=" text-center text-lg-start fixed-bottom" style="float:center; height:30px; font-family: 'Oswald', sans-serif; ">
        <div class="text-center p-1" style="color:white; height:auto; text-align:center;">
        © 2021:Sistem Informasi Manajemen Kelompok III
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    @yield('footer')
</body>

</html>