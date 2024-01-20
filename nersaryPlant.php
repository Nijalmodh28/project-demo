<?php
    $cn = mysqli_connect("localhost","root","","nersary") or die("connection faild").mysqli_connect_error();
    if(isset($_POST['submit'])){
    $sql = "INSERT INTO login(email , password) VALUES ('$_REQUEST[email]','$_REQUEST[password]')";
    $add = mysqli_query($cn, $sql);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="designPlant.css">
</head>
<body>
    <section>
    <div class="login-box">
        <form action="nersaryPlant.php" method="post">
        <h2>Login</h2>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" name ="email" required>
            <label>Email or Phone</label>
        </div>       
         <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name ="password" required>
            <label>Password</label>
        </div>
        <div class="remember-forgot">
            <label ><input type="checkbox">Remember me</label>
            <a href="#" name = "update">Forgot Password ?</a>
        </div>
        <button type="submit" name = "submit">Login</button>
        <div class="register-link">
            <p>Dont't have an account ?<a href="http://localhost/project/register.php">Register</a></p>
        </div>
    </form>
    </div>
</section>
</body>
</html>

