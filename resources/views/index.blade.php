<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Style dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Css Custome -->
    <link rel="stylesheet" href="{{ @style }}">

    <title>Pelaporan Kinerja</title>
</head>
<body>
    <div class="fContainer">
        <div class="box-login">
            <form action="{{ "home" }}" method="get">
                <h1>{{ @name }}</h1>
                <label class="login">Login</label><br>
                <label>Username</label><br>
                    <input type="text" placeholder="Masukan NIP"><br>
                <label>Password</label><br>
                    <input type="password"><br>
                <input type="submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>