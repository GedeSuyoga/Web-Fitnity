<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="{{ route('doLogin') }}" method="post">
                @csrf
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required value="{{ old('email') }}">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                    @if(session('error'))
                        <span class="error">{{ session('error') }}</span>
                    @endif
                </div>
                <div class="links">
                    Don't have an account? <a href="{{ route('register') }}">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
