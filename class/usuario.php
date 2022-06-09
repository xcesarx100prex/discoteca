<?php
class usuario{
        var $id = null;
        var $correo = null;
        var $contrasena = null;
        function iniciarseccion(string $_correo,string $_contrasena)
        {
            
            $conex=mysqli_connect("localhost","root","",'discoteca');
            if($conex)
            {
                $consulta="SELECT id_usuario,correo,contra FROM usuario where correo='$_correo' and contra='$_contrasena'";
                $resultado=mysqli_query($conex,$consulta);
                $filas= mysqli_num_rows($resultado);
                if($filas)
                {
                    $date=$resultado->fetch_assoc();
                    $this->id=$date['id_usuario'];
                    $this->correo=$date['correo'];
                    $this->contrasena=$date['contra'];
                    header("location:/PROYECTO/src/cliente.php");

                }
                else{
                    
                }
            }

        } 
        function imprimir()
        {
            echo  $this->id;
            echo $this->correo;
            echo $this->contrasena;
        }
    }
?>