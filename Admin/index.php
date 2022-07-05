<?php
include_once "../includes/ad_functions.php";
loginwithCookie();

if(isset($_POST["admin"]["btn_login"])){
    adlogin($_POST['admin']);
}
    


?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <div>
                <input type="text" name="admin[username]" id="" placeholder="نام کاربری">
            </div>
            <div>
                <input type="password" name="admin[password]" id="" placeholder="رمز عبور">
            </div>
            <div>
                <input type="checkbox" name="admin[remember]" id="rememberme" >
                <label for="rememberme">مرا به خاطر بیاور</label>
            </div>
            <div>
                <input type="submit" name="admin[btn_login]" id="" value="Login"  >
            </div>
        </form>
        <div>
            <a href="">
                فراموشی رمز عبور
            </a>
        </div>
    </div>
</body>
</html>