<?php
include("connect.php");
if(isset($_POST["create"])){
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $mname = mysqli_real_escape_string($conn,$_POST["mname"]);
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $age = mysqli_real_escape_string($conn,$_POST["age"]);
    $filename = $_FILES ["ADO"]["name"];
    $tempname = $_FILES["ADO"]["tmp_name"];
    $folder = "./ABEBE/". $filename;
    
    $sql = "INSERT INTO book (fname, mname, lname, type, age, ADO) VALUES ('$fname', '$mname', '$lname', '$type', '$age', '$filename')";
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
if(isset($_POST["edit"])){
    $filename = $_FILES ["ADO"]["name"];
    $tempname = $_FILES["ADO"]["tmp_name"];
    $folder = "./ABEBE/". $filename;
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $mname = mysqli_real_escape_string($conn,$_POST["mname"]);
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $age = mysqli_real_escape_string($conn,$_POST["age"]);
    $id = mysqli_real_escape_string($conn,$_POST["id"]);

    $sql = "UPDATE book SET fname = '$fname', mname = '$mname',lname = '$lname', type = '$type',age = '$age', ADO = '$filename'WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["update"] = "edit successfully";
        header("location:teacher.php");
    }else {
        die("wrong");
    }

}
?>