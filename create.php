<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <header class="d-flex justify-content-between my-4">
    <h1>teacher regestration form</form></h1>
    <div>
    <a href="teacher.php" class= "btn btn-primary"> BACK </a>
    </div>
    </header>
</div>

   <div class="container">

 <form action="process.php" method="post" enctype="multipart/form-data">
    <div class="form-element my-4">
        <input type="text" name="fname" class= "form-control"placeholder="first name">
    </div>
    <div class="form-element my-4">
        <input type="text" name="mname" class= "form-control"placeholder="middel name">
    </div>
    <div class="form-element my-4">
        <input type="text" name="lname" class= "form-control"placeholder="last name">
    </div>
    <div class="form-element my-4">
        <select name="type" class= "form-control" >
            <option value="">select gender</option>
            <option value="male">MALE</option>
            <option value="female">FEMALE</option>
        </select>
    </div>
    <div class="form-element my-4">
        <input type="text" name="age" class= "form-control"placeholder="age">
    </div>
    <div class="form-element my-4">
        <input type="file" name="ADO" >
    </div>
    <div class="form-element my-4">
        <input type="submit" name="create" class= "btn btn-success" value=" ADD">
    </div>
   
</body>
</html>