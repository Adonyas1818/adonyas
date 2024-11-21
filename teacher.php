<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>MIERAF PRE-PRIMARY/PRIMARY AND MIDDEL SCHOOL</title>
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
        <div>
    <h1>MIERAF PRE-PRIMARY/PRIMARY AND MIDDEL SCHOOL TEACHER</h1>
         </div>
    
    </header>
  

    <div>
    <a href="index.php" class= "btn btn-primary" style="float:right">BACK </a>
    <a href="create.php" class= "btn btn-primary" style="float:left">ADD NEW </a>
    </div><br><br>
    <div class="col-md-3 mb-4">
      <div class="card card-body p-3">
        <p class="text-em mb-0 text-capitalize font-weight-bold">MALE</p>
        <h5 class="font-weight mb-0">
          <?php
          include ("connect.php");
           $todayDate = date('y-m-d');
           $sql = "SELECT * FROM book WHERE type='MALE'";
           $result = mysqli_query($conn, $sql);
           $totalCount = mysqli_num_rows($result);
           echo $totalCount;
          ?>
        </h5>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card card-body p-3">
        <p class="text-em mb-0 text-capitalize font-weight-bold">FEMALE</p>
        <h5 class="font-weight mb-0">
          <?php
          include ("connect.php");
           $todayDate = date('y-m-d');
           $query = "SELECT * FROM book WHERE type='FEMALE'";
           $result = mysqli_query($conn, $query);
           $totalCount = mysqli_num_rows($result);
           echo $totalCount;
          ?>
        </h5>
      </div>
</div>
<div class="col-md-3 mb-4">
      <div class="card card-body p-3">
        <p class="text-em mb-0 text-capitalize font-weight-bold">FEMALE AGE </p>
        <h5 class="font-weight mb-0">
          <?php
          include ("connect.php");
           $todayDate = date('y-m-d');
           $query = "SELECT * FROM book WHERE type='FEMALE' AND age <'60'";
           $result = mysqli_query($conn, $query);
           $totalCount = mysqli_num_rows($result);
           echo $totalCount;
          ?>
        </h5>
      </div>
</div>
    <?php
      session_start();
      if(isset($_SESSION["create"])){

        ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            unset ($_SESSION["create"]);
            ?>
        </div>
        <?php
      }

    ?>
     <?php
      if(isset($_SESSION["update"])){
        ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["update"];
            unset ($_SESSION["update"]);
            ?>
        </div>
        <?php
      }

    ?>
     <?php
      if(isset($_SESSION["delete"])){

        ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["delete"];
            unset ($_SESSION["delete"]);
            ?>
        </div>
        <?php
      }

    ?>
    <table class="table table-bordered" style= "overflow-x: auto;">
    <a href="export.php" class= "btn btn-info" ><button type="button" name="button">export to excel</button> </a>
     <thead>
        <tr>
            <th>#</th>
            <th>image</th>
            <th>NAME</th>
            <th>FATHER NAME</th>
            <th>GRAND FATHER NAME</th>
            <th>GENEDER</th>
            <th>AGE</th>
            <th>ACTION</th>
     </thead>
     <tbody>
        <?php
        include("connect.php");
        $i = 1;
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td ><img src="ABEBE/<?php echo $row["ADO"]; ?>" class= "img-rounded" style="width: 140px; height: 140px"/></td>
                <td><?php echo $row["fname"]; ?></td>
                <td><?php echo $row["mname"]; ?></td>
                <td><?php echo $row["lname"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row["id"]; ?> " class= "btn btn-info">VIEW MORE</a>
                    <a href="edit.php?id=<?php echo $row["id"]; ?> " class= "btn btn-warning">EDIT</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class= "btn btn-danger">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
     </tbody>

    </table>
</body>
</html>