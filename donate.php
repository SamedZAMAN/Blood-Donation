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
    <link rel="stylesheet" href="css/donate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- for icaons -->
</head>
<body>
<body>
    
    
    <section id="header">
        <div class="div">
            <a href="#"><img src="logo.png" alt=""  ></a>
            <a href="#" class="logoyazi"><span style="color: white;">GAZİ</span><br>Kan Bankası</a>
        </div>
        
        <!-- kurtulan kişilerin sayısı ve kurtulduktan önceki ve sonraki halleri konulacak -->
        

        <ul style="display:flex;">
            <li style="margin-top:18px;"><a href="index.php" style= "color:white; font-size:3rem; margin-top:20px; margin-right:40px; padding:6px; border:2px solid white; border-radius:10px ">Ana Sayfa</a></li>
            <li><i class="material-icons" style = "color :white; font-size: 6rem; margin-top:5px; cursor:pointer; border:1px solid #fff; border-radius:50%;">account_circle</i>
                <ul class="user">
                    <li class="userName"><a href="#"><?= htmlspecialchars($user["name"]) ?></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </section>  

    <div class="clearfix">a</div>

    <section id="page-container" style="display: flex;">
        <div class="navbar">
            <ul>
                <li><i class="material-icons" style = "font-size:5rem;">face</i><a href="personal.php">Personal Inf</a></li>
                <li><i class="material-icons" style = "font-size:5rem;">local_activity</i><a href="raffel.php">Raffel</a></li>
                <li><i class="material-icons" style = "font-size:5rem;">bloodtype</i><a href="donate.php">Donate</a></li>
            </ul>
        </div>

        <div class="container">
            <h1>Donate</h1>
            <div class="page">
                <p>If you join us and donate a blood. You can find our website when you need a blood.
                    You can take a blood when you need if sing in our website and donate a blood. Just help others and can you find help anyone</p>
            </div>

            <form method="post" action="take-unit.php" novalidate>
                <label for="blood">Donate Blood Unit: </label>
                <select id="unit" name="unit" style="cursor:pointer;">
                    <option value="1">1 unit</option>
                    <option value="2">2 unit</option>
                    <option value="3">3 unit</option>
                    <option value="4">4 unit</option>
                </select>
                <input class="button" type="submit" value="Donate" style="font-size:2.2rem; background:red; border-radius:10px; padding:5px; margin-left:5px; cursor:pointer;">
            </form>

            <div class="result">
                <p>Mr. <?= ucfirst(htmlspecialchars($user["name"])) ." ". strtoupper(htmlspecialchars($user["lastName"]))?> your blood donation received. You want to donate <span> <?= htmlspecialchars($user["unit"]) ?>unit </span> blood. </p>
            </div>

    </section>

    
        



</body>
</body>
</html>