<?php
    include_once("conexion.php");
    class Controlador
    {
        private $conexion;
        function __construct()
        {
            $this->conexion=new mysqli(HOST,USER,PASS,DBNAME);
        }

        function alta_datos($nombre,$ap_pat,$ap_mat,$email)
        {
            $consulta="INSERT INTO asistente(nombre_asistente, apellido_pat_asistente, apellido_mat_asistente, e_mail) VALUES 
            ('".$nombre."','".$ap_pat."','".$ap_mat."','".$email."')";
            if($this->conexion->query($consulta))
            header("Location: index.php?msg=Nuevo asistente registrado");
        }

        function mostrar(){
            $consulta="select * from asistente";
            $res=$this->conexion->query($consulta);
            return $res;
        }

        function eliminar($id){
            $consulta="DELETE FROM asistente WHERE id_asistente=".$id;
            $this->conexion->query($consulta);
        }

        function recuperar($id)
        {
            $consulta="SELECT * FROM asistente where id_asistente=".$id;
            $res=$this->conexion->query ($consulta);
            return $res;
        }

        function modificar($id, $nombre, $apellido_pat, $apellido_mat, $email)
        {
            $consulta= "UPDATE asistente SET nombre_asistente= '".$nombre."',apellido_pat_asistente='".$apellido_pat."', apellido_mat_asistente='".$apellido_mat."', e_mail='".$email."'
            where id_asistente= ".$id;
            $this->conexion->query($consulta);
        }

        function buscar($opc,$dato){
            $consulta="";
            switch($opc){
                case 1:
                    $consulta="SELECT * FROM asistente where id_asistente =".$dato;
                    break;
                case 2:
                    $consulta="SELECT * FROM asistente where nombre_asistente like'".$dato."'";
                    break;
                case 3:
                    $consulta="SELECT * FROM asistente where apellido_pat_asistente like'".$dato."'";
                    break;
                case 4:
                    $consulta="SELECT * FROM asistente where apellido_mat_asistente like'".$dato."'";
                    break;    
                case 5:
                    $consulta="SELECT * FROM asistente where e_mail like'".$dato."'";
                    break;
                    
            }
            $res=$this ->conexion -> query($consulta);
            return $res;
        }

        public function verifica_duplicidad($nombre,$apellido_pat,$apellido_mat,$email)
        {
            $query="select * from asistente where nombre_asistente= '".$nombre."' and apellido_pat_asistente= '".$apellido_pat."' and apellido_mat_asistente= '".$apellido_mat."' and e_mail= '".$email."'";
            $res=$this->conexion->query($query);
            if($res->num_rows>0)
                return true;
            else return false;
                    
        }
    }
?>