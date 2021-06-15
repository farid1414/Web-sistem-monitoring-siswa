<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET PASSWORD</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div id="card">
        <div class="card-content">
            <div class="card-title">
                <h2>RESET PASSWORD </h2>
                <div class="underline"></div>
            </div>
            <form method="post" class="form" action="{{ route('lupapassword') }}">
                {{csrf_field()}}
                <label for="email" style="padding-top:13px">
                    Masukkan Email</label>
                <input id="email" class="form-content" type="email" name="email" value="{{ old('email') }}" required />
                <div class="form-border"></div>
                <button type="submit" class="btn">RESET PASSWORD</button>
            </form>
        </div>
    </div>
</body>

</html>