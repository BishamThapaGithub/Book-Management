<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet" href="./css/popup.css">
</head>

<body>
    @if($errors->any())
    <div class="alert alert-dialog">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="./image/logo.jpg" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Register Here</h1>
            </div>
            <form class="register" action="{{ route('register') }}" method="post">
                @csrf
                <label> Username:</label><br>
                <input type="text" name="name" id="user" class="form-control" placeholder="Enter your Username"
                    autocomplete="off"><br>
                <span id="usernameError" style="color: red;"></span><br>
                <label>Email: </label><br>
                <input type="email" name="email" id="emails" class="form-control" placeholder="Enter your email"
                    autocomplete="off"><br>
                <span id="emailError" style="color: red;"></span><br>
                <label>Password: </label><br>
                <input type="password" name="password" id="pass" class="form-control" placeholder="Enter Password"
                    autocomplete="off"><br>
                <span id="passwordError" style="color: red;"></span><br>

                <button type="submit" name="submit" value="submit">Register</button>
                <div class="login-card-footer">
                    already have an account? <a href="/go">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
