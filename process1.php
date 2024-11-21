<?php
include("connect.php");
if(isset($_POST["create"])){
    $filename = $_FILES ["ADO"]["name"];
    $tempname = $_FILES["ADO"]["tmp_name"];
    $folder = "./ABEBE/". $filename;
    
    $sql = "INSERT INTO book1 (fname) VALUES ('$filename')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "insert successfully";
        header("location:teacher.php");
    }else {
        die("wrong");
    }

    if(move_uploaded_file($tempname, $folder)){
        echo "good";
    }

}