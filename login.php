<?php

    $is_invalid = false;

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $mysqli = require __DIR__ . "/database.php";
    

        $sql = sprintf("SELECT * FROM user 
                        WHERE email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        $result = $mysqli ->query($sql);

        $user = $result->fetch_assoc();

        if($user){
            if(password_verify($_POST["password"],$user["password_hash"])){
                
                session_start();

                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: index.php");
                exit;
                
            }
        }

        $is_invalid = true;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <div class="center">
        <h1>Login</h1>

        <?php if ($is_invalid):?>
            <div style="margin-top: 20px;"><em style = "padding-left:43px;">Invalid login</em></div>
        <?php endif; ?> 

        <form method = "post"> 
            <div class="txt_field">
                <input type="email" required name="email" id="email"
                       value= "<?= htmlspecialchars($_POST["email"]??"")?>">
                <span></span>
                <label>Email</label>
            </div>

            <div class="txt_field">
                <input type="password" required name="password" id="password">
                <span></span>
                <label>Password</label>
            </div>
            
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a mamber? <a href="signup.html">SignUp</a>
            </div>
        </form>
    </div>


</body>
</html>