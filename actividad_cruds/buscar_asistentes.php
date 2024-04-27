<?php
    include_once("controlador.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
     integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Búsqueda de asistentes</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        Búsqueda de asistentes
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>
                Buscar asistente
            </h3>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="buscar_asistentes.php" method="POST">
            <select name="opcion_busqueda" class="form-select">
                <option selected>Búsqueda por...</option>
                <option value="1">ID</option>
                <option value="2">Nombre</option>
                <option value="3">Apellido paterno</option>
                <option value="4">Apellido materno</option>
                <option value="5">E-mail</option>
            </select>
            <br>
            <div class="container">
                <input type="text" name="dato_busqueda" class="form-control" placeholder="Buscar...">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-primary " type="submit" value="Buscar">
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
            
            <br>          
            </form>
        </div>
    </div>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">E-Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("controlador.php");
                $ob=new Controlador();
                if($_POST){
                    $opc=$_POST['opcion_busqueda'];
                    $dato=$_POST['dato_busqueda'];
                    $res=$ob->buscar($opc,$dato);
                    while ($fila=$res->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$fila['id_asistente']."</td>
                                <td>".$fila['nombre_asistente']."</td>
                                <td>".$fila['apellido_pat_asistente']."</td>
                                <td>".$fila['apellido_mat_asistente']."</td>
                                <td>".$fila['e_mail']."</td>
                            </tr>";}
                    }
            ?>
        </tbody>    
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>