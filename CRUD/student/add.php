<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista</title>
  </head>
  <body>
   
  <?php
    //Instanciar la clase student
    require_once("../class/student.php");
    $stu = new Student();
    $liststudents = $stu -> getStudent1();
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="https://media.futbolmania.com/media/boxes/escudo_borussia_dormund.png" alt="" width="65" height="65" class="navbar-brand">
    
    <a class="navbar-brand" href="../index.php">Colegio Echte Liebe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle h4" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            CRUD 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item h5" href="list.php">Listar</a></li>
            <li><a class="dropdown-item h5" href="#">Agregar</a></li>
            <li><a class="dropdown-item h5" href="#">Actualizar Estudiante</a></li>
            <li><a class="dropdown-item h5" href="#">Eliminar esudiante</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
if(isset($_POST['Registrar'])){
    $code = $_POST['txtCode'];
    $dni = $_POST['txtDni'];
    $name = $_POST['txtName'];
    $lastname = $_POST['txtLastname'];
    $email = $_POST['txtEmail'];
    $cellphone = $_POST['txtCellphone'];

    
    require_once("../class/student.php");
    $stu = new Student(); //Instancia
    //Enviar los datos a la funcion insertstudent
    $stu->insertStudent($code, $dni, $name, $lastname, $email, $cellphone);

}
?>

   <div class="container">
    <h2>Agregar nuevo estudiante</h2>
    <div class="row">
        <div class="col-md-5">

    <form action="" method="POST">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Código</label>
        <input type="text" class="form-control" name="txtCode">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI</label>
        <input type="text" class="form-control" name="txtDni">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="txtName">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="txtLastname">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" class="form-control" name="txtEmail">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Celular</label>
        <input type="text" class="form-control" name="txtCellphone">
    </div>    


    <button type="submit" name="Registrar" class="btn btn-primary">Registrar</button>
    </form>




        </div>
        <div class="col-md-7">
        </div>
    </div>



   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>