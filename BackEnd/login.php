<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <style>
        .login-link {
            border: none;
            outline: none;
            color: #fff;
            margin-bottom: 12px;
        }

        .control-group {
            margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <form action="./handle/handlelogin.php" method="POST" class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Login</h1>
            </div>

            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" value="" placeholder="username" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="password" name="password" class="login-field" value="" placeholder="password" id="login-pass">
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>

                <!-- <a class="btn btn-primary btn-large btn-block"  href="#">login</a> -->
                <button class="login-link btn btn-primary btn-large btn-block" name="login">Login</button>
                <a href="#">Lost your password?</a>
            </div>
        </div>
    </form>
</body>

</html>