<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div id="card">
        <div class="card-content">
            <div class="card-title">
                <h2>LOGIN</h2>
                <div class="underline"></div>
            </div>
            <form method="post" class="form" action="{{ route('postlogin') }}">
                {{csrf_field()}}
                <label for="nip" style="padding-top:13px">
                    Masukkan NIP</label>
                <input id="text" class="form-content" type="nip" name="nip" required />
                <div class="form-border"></div>
                <label for="tgl_lahir" style="padding-top:22px">tgl_lahir
                </label>
                <input id="tgl_lahir" class="form-content" type="date" name="tgl_lahir" required />
                <div class="form-border"></div>
                <button type="submit" class="btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>