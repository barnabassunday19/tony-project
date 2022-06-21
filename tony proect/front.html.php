

<?php 
$servername = 'localhost';
$password='';
$username='root';

try{
    $conn = new PDO("mysql:host=;dbname=LoginSystem", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: "  . $e->getMessage();
}

?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>LogIn and SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="front.css.css">


</head>

<body>
    <div class="whole">
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="box">
        
        <div class="page">
            <div class="header">
                <a id="login" class="active" href="#login">login</a>
               
            </div>
            <div id="errorMsg"></div>
            <div class="content">
                <form class="login" name="loginForm" onsubmit="return validateLoginForm()" method="POST">
                    <input type="text" name="name" id="logName" placeholder="Username">
                    <input type="password" name="password" id="logPassword" placeholder="Password">
                    <div id="check">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <br><br>
                    <input type="submit" formaction="flex&responsiveness.php" value="Login">
                    <a href="#">Forgot Password?</a>
                    <a href="signupform.php">SignUp</a>
                </form>
              
            </div>
        </div>
    </div>
</div>
  
    <script src="js.js"></script>
</body>