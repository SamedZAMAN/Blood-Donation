<?php
    session_start(); 

    if(isset($_SESSION["user_id"])){
        $mysqli = require __DIR__ . "/database.php";

        $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

        $result = $mysqli->query($sql);

        $user = $result ->fetch_assoc();


    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KanBagisiLogin</title>
    <link rel="stylesheet" href="css/personal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- for icaons -->
</head>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KanBagisiLogin</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- for icaons -->
</head>

<body>
    
    
    <section id="header">
        <div class="div">
            <a href="#"><img src="logo.png" alt=""  ></a>
            <a href="#" class="logoyazi"><span style="color: white;">GAZİ</span><br>Kan Bankası</a>
        </div>
        
        <!-- kurtulan kişilerin sayısı ve kurtulduktan önceki ve sonraki halleri konulacak -->
        

        <ul style="display:flex; ">
            <li style="margin-top:18px; posution:absulute;"><a href="index.php" style= "color:white; font-size:3rem; margin-top:20px; margin-right:40px; padding:6px; border:2px solid white; border-radius:10px ">Ana Sayfa</a></li>
            <li><i class="material-icons" style = "color :white; font-size: 6rem; margin-top:5px; cursor:pointer; border:1px solid #fff; border-radius:50%;">account_circle</i>
                <ul class="user">
                    <li class="userName"><a href="#"><?= htmlspecialchars($user["name"]) ?></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </section>  

    <body>
    

    <div class="clearfix">a</div>

    <section id="page-container" style="display: flex;">
        <div class="navbar">
            <ul>
                <li><i class="material-icons">face</i><a href="personal.php">Personal Inf</a></li>
                <li><i class="material-icons">local_activity</i><a href="raffel.php">Raffel</a></li>
                <li><i class="material-icons">bloodtype</i><a href="donate.php">Donate</a></li>
            </ul>
        </div>

        <div class="container">
            <form action="personal-process.php" method="POST">

                <label for="fname">First Name</label>
                <?php  
                if(isset($_SESSION["name"])){
                    
                }
                ?>
                <input type="text" id="fname" name="firstName" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastName" placeholder="Your last name..">

                <label for="country">Blood Typ</label>
                <select id="blood" name="bloodType">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="0-">0-</option>
                <option value="0+">0+</option>
                </select>

                <label for="lname">age</label>
                <input type="text" id="lname" name="age" placeholder="Your age...">

                <label for="lname">height</label>
                <input type="text" id="lname" name="height" placeholder="Your height...">

                <button style="font-size:3rem; padding:3px; border-radius:10px;">Save</button>
                

            </form>
        </div>

    </section>

    
        



</body>
      
</html>