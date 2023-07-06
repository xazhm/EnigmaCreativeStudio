<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-box">
                <input type="text" name="email" id="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <button type="submit" class="regist button" href="login">Log In</button>
            </div>
        </form>

        <hr>
        <p>Belum mempunyai akun? <a href="{{ route('register') }}">Register</a></p>
    </div>
</body>

</html>
