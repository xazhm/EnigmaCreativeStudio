<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="email" required />
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required />
                <label>Password</label>
            </div>
            <div class="option">
                <button type="submit">Login</button>
            </div>
            @if(session('error'))
            <p class="error-message">
                Data invalid. Please login again.
            </p>
            @endif
        </form>
        <p>Belum mempunyai akun? <a href="{{ route('register') }}">Register</a></p>
    </div>
</body>

</html>