<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div class="nav"></div>
        <div class="body">
            <div class="container form-login">
                <form method="POST" action="">
                    @csrf
                    <label for="username">Correo/Numero Control</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </form>
            </div>
        </div>
        <div class="footer"></div>
    </div>
   
</body>
</html>