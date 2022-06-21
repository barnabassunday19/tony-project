

                
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
                <a id="login" class="active" href="#login">Signup</a>
               
            </div>
            <div id="errorMsg"></div>
            <div class="content">
             <form class="signup"  formaction="" name="signupForm" onsubmit="return validateSignupForm()" method="POST">
                    <input type="email" name="email" id="signEmail" placeholder="Email">
                    <input type="text" name="name" id="signName" placeholder="Username">
                    <input type="password" name="password" id="signPassword" placeholder="Password"><br>
                    <input type="submit" value="SignUp">
                    <a href="front.html.php">back</a>
                </form>

            </div>
        </div>
    </div>
</div>
 
    <script src="js.js"></script>
</body>