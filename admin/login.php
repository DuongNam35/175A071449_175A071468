<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/STYLE.CSS">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="modal-content">
                <h1>Sign In</h1>
                <form action="process-login.php" method="POST">
                    <div class="form-group form-user">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                    </div>
                    <div class="form-group form-password">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        
                    </div>
                   <button type="submit" name="submit">Login</button>
                </form>
                <p class="signup">Don't have an account?<a href="#"> Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>