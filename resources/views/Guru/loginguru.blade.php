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
                <h2>LOGIN GURU</h2>
                <div class="underline"></div>
            </div>
            <form method="post" class="form">
                <label for="Guru" style="padding-top:13px">
                    Masukkan NIP</label>
                <input id="guru" class="form-content" type="text" name="guru" required />
                <div class="form-border"></div>
                <label for="password" style="padding-top:22px">Password
                </label>
                <input id="password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <button type="submit" class="btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>