<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <header class="d-flex justify-content-between my-4">
    <h1>edit</h1>
    <div>
    <a href="teacher.php" class= "btn btn-primary"> BACK </a>
    </div>
    </header>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    include("connect.php");
        $sql = "SELECT * FROM book WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

    ?>
   <form action="process.php" method="post" enctype="multipart/form-data">
    <div class="form-element my-4">
        <input type="text" name="fname" class= "form-control" VALUE= "<?php echo $row ["fname"] ?>"placeholder="first name">
    </div>
    <div class="form-element my-4">
        <input type="text" name="mname" class= "form-control" VALUE= "<?php echo $row ["mname"] ?>" placeholder="middel name">
    </div>
    <div class="form-element my-4">
        <input type="text" name="lname" class= "form-control" VALUE= "<?php echo $row ["lname"] ?>" placeholder="last name">
    </div>
    <div class="form-element my-4">
        <select name="type" class= "form-control" VALUE= "<?php echo $row ["type"] ?>">
            <option value="">select gender</option>
            <option value="male"><?php if($row['type']== "male"){echo "selected";} ?>>MALE</option>
            <option value="female"><?php if($row['type']== "female"){echo "selected";} ?>>FEMALE</option>
        </select>
    </div>
    <div class="form-element my-4">
        <input type="text" name="age" class= "form-control" VALUE= "<?php echo $row ["age"] ?>" placeholder="age">
    </div>
    <div class="form-element my-4">
        <input type="file" name="ADO" VALUE = "<?php echo $row["ADO"] ?>" >
    </div>
    <input type="hidden" name="id" VALUE = '<?php echo $row['id']; ?>'>
    <div class="form-element my-4">
        <input type="submit" name="edit" class= "btn btn-success" value="edit">
    </div>

 </form>

    <?php
}
?>

</div>

   <div class="container">

 
   </div >
   
</body>
</html>