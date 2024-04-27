<?php
    include_once("controlador.php");
    $objeto=new controlador ();
    $id=$_GET['id_asistente'];
    $objeto->eliminar($id);
    header("Location: index.php?msg=Asistente eliminado");
?>