<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <link rel="stylesheet" href="/css/registrasi.css">
</head>

<body>
    <div id="card">
        <div class="card-content">
            <div class="card-title">
                <h2>REGISTRASI ORANG TUA</h2>
                <div class="underline"></div>
            </div>
            <form method="post" class="form" action="{{ route('simpanregistrasi') }}">
                {{csrf_field()}}
                <label for="name" style="padding-top:13px">
                    nama</label>
                <input id="name" class="form-content" type="text" name="name" required />
                <div class="form-border"></div>
                <label for="email" style="padding-top:13px">
                    Email</label>
                <input id="email" class="form-content" type="email" name="email" required />
                <div class="form-border"></div>
                <label for="password" style="padding-top:22px">Password
                </label>
                <input id="password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <a href="/login">Sudah punya akun?</a> <br>
                <span >*NB: Khusus registrasi akun orang tua</span>
                <button type="submit" class="btn">REGISTRASI</button>
            </form>
        </div>
    </div>
</body>

</html>