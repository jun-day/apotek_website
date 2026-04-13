<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
    <body>
        <div class="backround">

        </div>
        <div class="parent">
            <div class="form-container" >
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                <p class="title">L o g i n</p>
                <form class="form">
                    <input type="email" class="input" placeholder="Email">
                    <input type="password" class="input" placeholder="Password">
                    <p class="page-link">
                    <span class="page-link-label">Forgot Password ?</span>
                    </p>
                    <button class="form-btn">Log in</button>
                </form>
                <p class="sign-up-label">
                    Belum memiliki akun ?<span class="sign-up-link">Sign up</span>
                </p>
            </div>
        </div>
</body>
</html>
