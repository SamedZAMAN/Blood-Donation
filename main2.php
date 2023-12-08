<?php


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
    <title>Document</title>
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    
    
    <section id="header">
       
        <a href="#"><img src="logo.png" alt=""  ></a>
        <a href="#" class="logoyazi"><span style="color: white;">GAZİ</span><br>Kan Bankası</a>
        <!-- kurtulan kişilerin sayısı ve kurtulduktan önceki ve sonraki halleri konulacak -->
        

        <ul>
            <li><a href="#anasayfa">Ana Sayfa</a></li>
            <li><a href="#bagıs">KanBağışı</a></li>
            <li><a href="#iletisim">İletişim</a></li>
            <li><span></span><a href="login.php" class="fa fa-user"><span></span> Giriş yap</a></li>
            <li>/</li>
            <li><a href="signup.html" class="fa fa-user-plus" ><span></span>Kayıt Ol</a></li>
        </ul>
    </section>  


    <section id="anasayfa">
        
        <div class="box-container">
            
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">


                    <div class="slide first">
                        <img src="img_slider/1.png" alt="">
                    </div>
                    <div class="slide second">
                        <img src="img_slider/2.png" alt="">
                    </div>
                    <div class="slide third">
                        <img src="img_slider/3.png" alt="">
                    </div>
                    <div class="slide fourth">
                        <img src="img_slider/4.png" alt="">
                    </div>

                    <div class="box">
                        <h1><span>Blood</span> Donation <br> Is a Requirement</h1>
                        <p>You don't know when you  need a bood.</p>
                        <a href="login.php">Donate Now</a>
                    </div>
    
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
    
                    <div class="navigation-manuel">
                        <label for="radio1" class="manuel-btn"></label>
                        <label for="radio2" class="manuel-btn"></label>
                        <label for="radio3" class="manuel-btn"></label>
                        <label for="radio4" class="manuel-btn"></label>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="bagıs">
        <div class="box-container">
            <div class="box">
                <h2><span>Donate</span> For Our Life and Save Others!</h2>
                <p>We rely on donations to help us fulfill our mission of saving as many person as possible.</p>
                <div class="img">
                    <a href="find.html"><img src="imgs/blood.jpg" alt=""></a>
                </div>
            </div>

            <div class="box2">
                <div class="baslik">
                    <h3 style="font-size: 4rem;">Why <span><a href="#" style="color: red;">Donate</a> </span>  This Website</h3>
                </div>
                <p>By donating blood, you will benefit both yourself and other people. This place allows you to easily find blood and donate blood to those in need. it will be easier for you to find blood for yourself with the blood donation that you can perform quickly.</p>
                <p>Why should I donate blood to this platform? Because we give the assurance that the donated blood goes to the owners. We guarantee that when blood is needed, it will be found.</p>
                <P><br> Only assistance is provided to those in need. There is no blood sale with money or priority with money in our company. Whoever has donated more to us has more priority and we help people as much as we can.</P>
                <p><br> This is who we are, if you have helped, in the same way we help you when you need it. No one knows what will happen tomorrow, what are you waiting for to secure your future and to help people who need blood!!</p>
            </div>
            
        </div>
    </section>
        
    <section id="table">
        <div class="container">
            <h2><span>Blood </span>Table</h2>
            <p>Do you need a blood? Can you take blood for us but first you signIn our page and donate blood first!!! <br><span style="text-decoration: underline; color: black;">If you didn't donate any blood , you can not take a blood.</span>
               <br> </p>
        </div>

        <form action="">
            
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
                        <th>0+</th>
                        <th>0-</th>
                    </tr>
                    <tr>
                        
                        <th>Blood Stock</th>
                        <td><?= $totalAP?></td>
                        <td><?= $totalAN?></td>
                        <td><?= $totalBP?></td>
                        <td><?= $totalBN?></td>
                        <td><?= $totalABP?></td>
                        <td><?= $totalABN?></td>
                        <td><?= $totalZP?></td>
                        <td><?= $totalZN?></td>

                    </tr>
                </table>
            </div>
        </form>

        
    </section>
    
    <section id="iletisim">
        <div class="footer">
            <div class="contact">
                <h2>Contact</h2>
            </div>
            
            <div class="box-container">
                <div class="box">
                    <ul>
                        <li><span class="fa fa-phone" style="color: black;"></span> Number : <a href="#">0555 555 55 55</a></li>
                        <li><span class="fa fa-envelope" style="color: black; margin-right: 2px;"></span>Mail : gazikanbagısı@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    

</body>
</html>