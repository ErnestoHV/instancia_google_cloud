<?php
    include_once("controlador.php");
    $objeto=new Controlador();
    $id=$_GET['id_asistente'];
    $resul=$objeto->recuperar($id);
    $fila=$resul->fetch_assoc();
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

    <title>Editar asistentes</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        Editar asistentes
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>
                Editar información del asistente
            </h3>
        </div>

        <div class="container d-flex justify-content-center">
            
            <form action="modificar_asistentes.php" method="post" style="width:50vw; min-width:300px;">

            <div class="row">
                    <div class="col">
                        <label class="form-label">ID del asistente:</label><br>
                        <input type="text" value="<?php echo $fila['id_asistente'];?>"disabled>
                        <input type="hidden" name="id_asistente" value="<?php echo $fila['id_asistente'];?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Nombre del asistente:</label>
                        <input type="text" class="form-control" name="nombre_asistente" value=<?php echo $fila['nombre_asistente']?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Apellido paterno del asistente:</label>
                        <input type="text" class="form-control" name="apellido_paterno_asistente" value=<?php echo $fila['apellido_pat_asistente']?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Apellido materno del asistente:</label>
                        <input type="text" class="form-control" name="apellido_materno_asistente" value=<?php echo $fila['apellido_mat_asistente']?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Correo electrónico:</label>
                        <input type="text" class="form-control" name="email_asistente" value=<?php echo $fila['e_mail']?>>
                    </div>
                </div>

                <br>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Guardar cambios</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>      
                          
            </form>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>