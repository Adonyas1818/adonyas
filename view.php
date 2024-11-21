<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>details</title>
    <style>
        .book-details{
            background: green;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
        <div>
    <h1>DETAILS</h1>
         </div>
    </header>
    <div>
    <a href="teacher.php" class= "btn btn-primary" style="float:right">BACK </a>
    </div><br><br>
    <div class="book-details my-4">
        <?php 
          if(isset($_GET["id"])){ 
             $id = $_GET["id"];
             include("connect.php");
             $sql = "SELECT * FROM book WHERE id=$id";
             $result = mysqli_query($conn, $sql);
             $row = mysqli_fetch_array($result);
            ?>
            <h5>image</h5>
            <img src="ABEBE/<?php echo $row["ADO"]; ?>" class= "img-circle" style="width: 140px; height: 140px; "/>
            <h5>NAME</h5>
            <p><?php echo $row["fname"]; ?></p>
            <h5>FATHER NAME</h5>
            <p><?php echo $row["mname"]; ?></p>
            <h5>GRAND FATHER NAME</h5>
            <p><?php echo $row["lname"]; ?></p>
            <h5>GENEDER</h5>
            <p><?php echo $row["type"]; ?></p>
            <h5>AGE</h5>
            <p><?php echo $row["age"]; ?></p>
            <?php
          }
        ?>
        </div>
    </div>
   
</body>
</html>