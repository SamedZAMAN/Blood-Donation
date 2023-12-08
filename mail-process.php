<?php

session_start(); 

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";

    $sqlus = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sqlus);

    $user = $result ->fetch_assoc();
    $id = intval($user['id']);
    $mail = $_POST["mail"];
    $request = $_POST["request"];

    if(!empty($mail)){
        $sql = "UPDATE user SET mail = '$mail' WHERE id = $id";
    }
    
    if(!empty($request)){
        $sql = "UPDATE user SET request = '$request' WHERE id = $id";
    }


    $stmt = $mysqli->stmt_init();

    if(!$stmt->prepare($sql)){
        die("SQL error: ".$mysqli->error);
    };


    if($stmt->execute()){
        header("Location: index.php");
        exit; 
    }

}

