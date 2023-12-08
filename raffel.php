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
    <link rel="stylesheet" href="css/raffel.css">
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
            <h1>Raffel</h1>
            <div class="page">
                <p>Every year we have a raffle for say thank you. You can join our raffle after donate your blood.
                    Many person join for this speacial activity and we enjoy time in raffle.</p>
            </div>

            <?php
                if(array_key_exists('button1', $_POST)) {
                    button1();
                }
                else if(array_key_exists('button2', $_POST)) {
                    button2();
                }
                function button1() {
                    echo "This is Button1 that is selected";
                }
                function button2() {
                    echo "This is Button2 that is selected";
                }
            ?>

            
            <form method="post">
                <input type="submit" name="button1" class="button" value="Button1" />
                
                <input type="submit" name="button2"
                        class="button" value="Button2" />
            </form>

        </div>

    </section>

    
        



</body>
</body>
</html>