<?php
    include_once("controlador.php");
    $objeto=new controlador ();
    $resultado=$objeto->mostrar();
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

    <title>Asistentes</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        Lista de asistentes
    </nav>

    <div class="container">
        
        <?php
            if(isset($_GET['msg']))
            {
                $msg = $_GET['msg'];
                echo '  <div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
        ?>
    <div>
        <a href="registro_asistentes.php" class="btn btn-dark mb-3">Añadir asistente</a>
        <a href="buscar_asistentes.php" class="btn btn-dark mb-3">Buscar asistente</a>
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
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            while ($renglon=$resultado->fetch_assoc()){
                echo"
                    <tr>
                        <td>".$renglon['id_asistente']."</td>
                        <td>".$renglon['nombre_asistente']."</td>
                        <td>".$renglon['apellido_pat_asistente']."</td>
                        <td>".$renglon['apellido_mat_asistente']."</td>
                        <td>".$renglon['e_mail']."</td>
                        <td>
                            <a href='editar_asistentes.php?id_asistente=".$renglon['id_asistente']."'>".'<i class="fa-solid fa-pen-to-square fs-5 me-3"></i'."</a>
                        </td>
                        <td>
                            <a href='eliminar_asistentes.php?id_asistente=".$renglon['id_asistente']."'>".'<i class="fa-solid fa-trash fs-5"></i'."</a>
                        <td>
                    </tr>
                ";}
            ?>
            </tr>
        </tbody>
    </table>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>