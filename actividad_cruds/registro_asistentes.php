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

    <title>Registro de asistentes</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        Registro de asistentes
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>
                Añadir nuevo asistente
            </h3>
        </div>

        <div class="container d-flex justify-content-center">
            
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Nombre del asistente:</label>
                        <input type="text" class="form-control" name="nombre_asistente" placeholder="Nombre(s)">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Apellidos del asistente:</label>
                        <input type="text" class="form-control" name="apellido_pat_asistente" placeholder="Apellido paterno">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Apellidos del asistente:</label>
                        <input type="text" class="form-control" name="apellido_mat_asistente" placeholder="Apellido materno">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label">Correo electrónico:</label>
                        <input type="text" class="form-control" name="email_asistente" placeholder="E-Mail">
                    </div>
                </div>

                <br>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>          
            </form>
            <?php
                if($_POST){
                    $nom=$_POST['nombre_asistente'];
                    $ap_pat=$_POST['apellido_pat_asistente'];
                    $ap_mat=$_POST['apellido_mat_asistente'];
                    $em=$_POST['email_asistente'];
                    $obj=new Controlador();
                    if(!$obj->verifica_duplicidad($nom,$ap_pat,$ap_mat,$em))
                    {
                        $obj-> alta_datos($nom,$ap_pat,$ap_mat,$em);
                    }
                    else
                    {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">  Registro duplicado
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        ';
                    }
                    
                }
            ?>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>