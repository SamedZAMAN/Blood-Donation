<?php
    session_start();

    $check = 1;

    if(isset($_SESSION["user_id"])){
        $mysqli = require __DIR__ . "/database.php";

        $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

        $result = $mysqli->query($sql);

        $user = $result ->fetch_assoc();
    }


    $mysqli = require __DIR__ . "/database.php";

    $unit = 'SELECT unit , bloodType FROM user';

    $result = $mysqli->query($unit);

    $units = $result->fetch_assoc();

    //A+
    $aPS = "SELECT unit FROM user WHERE bloodType ='A+'";

    $result = $mysqli->query($aPS);

    while($aPP = $result->fetch_assoc()){
        $aP[] = $aPP["unit"];
    }
    $totalAP=0;

    for($i = 0;$i<count($aP);$i++){
        $totalAP += $aP[$i];
    }


    //A-

    $aNS = "SELECT unit FROM user WHERE bloodType ='A-'";

    $result = $mysqli->query($aNS);

    while($aPN = $result->fetch_assoc()){
        $aN[] = $aPN["unit"];
    }
    $totalAN=0;

    for($i = 0;$i<count($aN);$i++){
        $totalAN += $aN[$i];
    }

    //B+
    $bPS = "SELECT unit FROM user WHERE bloodType ='B+'";

    $result = $mysqli->query($bPS);

    while($bPP = $result->fetch_assoc()){
        $bP[] = $bPP["unit"];
    }
    $totalBP=0;

    for($i = 0;$i<count($bP);$i++){
        $totalBP += $bP[$i];
    }
    //B-

    $bNS = "SELECT unit FROM user WHERE bloodType ='B-'";

    $result = $mysqli->query($bNS);

    while($bPN = $result->fetch_assoc()){
        $bN[] = $bPN["unit"];
    }
    $totalBN=0;

    for($i = 0;$i<count($bN);$i++){
        $totalBN += $bN[$i];
    }

    //AB+
    $abPS = "SELECT unit FROM user WHERE bloodType ='AB+'";

    $result = $mysqli->query($abPS);

    while($abPP = $result->fetch_assoc()){
        $abP[] = $abPP["unit"];
    }
    $totalABP=0;

    for($i = 0;$i<count($abP);$i++){
        $totalABP += $abP[$i];
    }

    //AB-
    $abNS = "SELECT unit FROM user WHERE bloodType ='AB-'";

    $result = $mysqli->query($abNS);

    while($abPN = $result->fetch_assoc()){
        $abN[] = $abPN["unit"];
    }
    $totalABN=0;

    for($i = 0;$i<count($abN);$i++){
        $totalABN += $abN[$i];
    }

    //0+
    $zPS = "SELECT unit FROM user WHERE bloodType ='0+'";

    $result = $mysqli->query($zPS);

    while($zPP = $result->fetch_assoc()){
        $zP[] = $zPP["unit"];
    }
    $totalZP=0;

    for($i = 0;$i<count($zP);$i++){
        $totalZP += $zP[$i];
    }

    //0-

    $zNS = "SELECT unit FROM user WHERE bloodType ='0-'";

    $result = $mysqli->query($zNS);

    while($zPN = $result->fetch_assoc()){
        $zN[] = $zPN["unit"];
    }
    $totalZN=0;

    for($i = 0;$i<count($zN);$i++){
        $totalZN += $zN[$i];
    }

    mysqli_close($mysqli);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KanBagisiLogin</title>
    <link rel="stylesheet" href="css/index.css">
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
        

        <ul style="display:flex; ">
            <li style="margin-top:18px; "><a href="index.php" style= "color:white; font-size:3rem; margin-top:20px; margin-right:40px; padding:6px; border:2px solid white; border-radius:10px ">Ana Sayfa</a></li>
            <li><i class="material-icons" style = "color :white; font-size: 6rem; margin-top:5px; cursor:pointer; border:1px solid #fff; border-radius:50%;">account_circle</i>  
                <ul class="user">
                    <li class="userName"><a href="#"><?= htmlspecialchars($user["name"]) ?></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </section>  

    <div class="clearfix">a</div>


    <section id="page-container">
        <div class="navbar">
            <ul>
                <li><i class="material-icons" style = "font-size:5rem;">face</i><a href="personal.php">Personal Inf</a></li>
                <li><i class="material-icons" style = "font-size:5rem;">local_activity</i><a href="raffel.php">Raffel</a></li>
                <li><i class="material-icons" style = "font-size:5rem;">bloodtype</i><a href="donate.php">Donate</a></li>
            </ul>
        </div>

        <div class="table">
            <?php

                if(array_key_exists('button1', $_POST)) {
                    $check = 0;
                    button1();
                }

                function button1(){
                    $check = 1;
                }

            ?>


            <form id="tableForm" method="post">
                
                <div class="blood_table">
                    <table border="1">
                        <caption><span style="font-size: 3rem; padding: 1px 14px;  border-radius: 10px; font-weight: bold;">TABLE of Stock</span></caption>
                        <tr>
                            <th>Blood Type</th>
                            <th>A+</th>
                            <th>A-</th>
                            <th>B+</th>
                            <th>B-</th>
                            <th>AB+</th>
                            <th>AB-</th>
                            <th>AB+</th>
                            <th><?php echo $check;?></th>
                        </tr>
                        <tr>
                            <th>Blood Stock</th>
                            <td><a href="#"><form method="POST"><?php if($totalAP == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalAP?></form></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalAN == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalAN?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalBP == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalBP?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalBN == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalBN?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalABP == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalABP?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalABN == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalABN?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalZP == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalZP?></form></a></a></td>
                            <td><a href="#"><form method="POST"><?php if($totalZN == 0)echo '<input type="submit" name="button1" class="button" value="0" style="font-size:3rem; padding:3px; border-radius:10px; cursor:pointer;">'; else echo $totalZN?></form></a></td>
                        </tr>
                        <tr <?php if($check != 0)echo 'style = "display : none";'; 
                            if($check == 0) echo 'style ="display : ;"';?>>
                            <th>Your Request</th>'
                            <form action="mail-process.php" method = "POST">
                                <td colspan="7"><textarea name="mail" id="mail" cols="30" rows="5" style="width: 90%;"></textarea></td>
                                <td><input type = "submit" name = "saveBut" value="SEND" style="font-size:3rem";></td>
                            </form>
                        </tr>
                    </table>
                </div>
                <div class="request">
                    <form action="mail-process.php" method = "POST">
                        <label style="font-size:3rem">For Complaint: </label>
                        <textarea name="request" id="request" cols="30" rows="2" style="width: 50%; margin-top:30px;"></textarea>
                        <input type = "submit" name = "saveBut" value="SEND" style="font-size:3rem";>
                    </form>
                </div>
            </form>
           
        </div>

   
    </section>





</body>
</body>


</html>
