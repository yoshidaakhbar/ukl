<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
    <link  rel="stylesheet" href="css/yoshi.css">
</head>
<body>
    <div class="login">
        <h1>log-in</h1><br>
          <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <a href="login.php">
              <button>login</button>
            </a>
         </form>
         <p><a href="register.php">Register</a> <a href="#">forgot password</a></p>
    </div>
  
</body>
</html>