<?php
    include_once("controlador.php");
    $objeto=new Controlador();
    $id_as=$_POST ['id_asistente'];
    $nom=$_POST['nombre_asistente'];
    $ap_pat=$_POST['apellido_paterno_asistente'];
    $ap_mat=$_POST['apellido_materno_asistente'];
    $em=$_POST['email_asistente'];
    $objeto-> modificar($id_as,$nom,$ap_pat,$ap_mat,$em);
    header("Location: index.php?msg=Información del asistente editada exitosamente");
?>