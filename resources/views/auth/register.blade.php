<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            @if(count($errors) > 0)
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            <form action="{{route('doRegister')}}" method="post">
                @csrf
                <div class="field input">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="Login.php">Sign In</a>
                </div>
            </form>
        </div>
      </div>
</body>
</html>