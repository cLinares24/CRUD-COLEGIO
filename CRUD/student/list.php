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
            <li><a class="dropdown-item h5" href="#">Listar</a></li>
            <li><a class="dropdown-item h5" href="add.php">Agregar</a></li>
            <li><a class="dropdown-item h5" href="#">Actualizar Estudiante</a></li>
            <li><a class="dropdown-item h5" href="#">Eliminar esudiante</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <table class="table table-striped">
    <thead>
        <th>CODIGO</th>
        <th>DNI</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>EMAIL</th>
        <th>CELULAR</th>
        <th>ACCIONES</th>
        
    </thead>
    <tbody>
        <?php
            foreach($liststudents as $value){ ?>
            <tr>
                <td><?php echo $value['stucode'];?></td>
                <td><?php echo $value['studni'];?></td>
                <td><?php echo $value['stuname'];?></td>
                <td><?php echo $value['stulastname'];?></td>
                <td><?php echo $value['stuemail'];?></td>
                <td><?php echo $value['stucellphone'];?></td>
                <td>
                     <a href="delete.php?cod=<?php echo $value['stucode'];?>">Eliminar</a>
                     <a href="edit.php?cod=<?php echo $value['stucode'];?>"">Actualizar</a>
                     
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
    </table>


    <?php
    if(isset($_GET['msj'])){
        $msj = $_GET['msj'];
        echo $msj;

    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>