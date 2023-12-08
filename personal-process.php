<?php

session_start(); 

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";

    $sqlus = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sqlus);

    $user = $result ->fetch_assoc();

    $lastName = $_POST["lastName"];
    $bloodType = $_POST["bloodType"];
    $age = $_POST["age"];
    $height = $_POST["height"];

    $id = intval($user['id']);

    $sql = "UPDATE user SET lastName='$lastName',bloodType='$bloodType',age='$age',height='$height' WHERE id = $id";

    $stmt = $mysqli->stmt_init();

    if(!$stmt->prepare($sql)){
        die("SQL error: ".$mysqli->error);
    };


    if($stmt->execute()){
        header("Location: personal.php");
        exit; 
    }

}