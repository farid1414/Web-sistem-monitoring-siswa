<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div id="card">
        <div class="card-content">
            <div class="card-title">
                <h2>LOGIN </h2>
                <div class="underline"></div>
            </div>
            <form method="post" class="form" action="{{ route('postlogin') }}">
                {{csrf_field()}}
                <label for="email" style="padding-top:13px">
                    Masukkan Email</label>
                <input id="email" class="form-content" type="email" name="email" required />
                <div class="form-border"></div>
                <label for="password" style="padding-top:22px">Password
                </label>
                <input id="password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <br>
                <a href="/registrasi">Daftar akun orang tua</a>
                <button type="submit" class="btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>