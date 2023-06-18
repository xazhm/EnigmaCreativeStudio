<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password_confirmation").value;

        if (name.length < 5) {
            alert("Username must be at least 5 characters long");
            return false;
        }

        if (password.length < 8) {
            alert("Password must be at least 8 characters long");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Password and confirmation password do not match");
            return false;
        }

        return true;
    }
    </script>
</head>

<body>
    <div class="login-box">
        <h2>Create An Account</h2>
        <form action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="user-box">
                <input type="text" name="name" id="name" required />
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" id="email" required />
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required />
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="password_confirmation" id="password_confirmation" required />
                <label>Confirm Password</label>
            </div>
            <div class="option">
                <button type="submit">Register</button>
            </div>
        </form>
        <p>Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
</body>

</html>