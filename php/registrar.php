<?php

    $servidor = "localhost";
    $baseDatos = "footballscout";
    $user = "root";
    $pass = "";

    $usuario=$_POST["usuario"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $contrasena= $_POST["contrasena"];
    $contrasena2= $_POST["contrasena2"];

    //comprobación
    if($usuario=="" || $nombre=="" || $apellidos=="" || $correo=="" $contrasena=="" || $contrasena2==""){
        
        //error

    }else if($contrasena!=$contrasena2){

        //error

    }else{
        try{

            $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['user'], $GLOBALS['pass']);
            $sql = $con->prepare("INSERT into usuarios values(null, :usuario , :nombre , :apellidos , null, :correo , null, :contrasena)");
            $sql->bindParam(":usuario", $usuario);
            $sql->bindParam(":nombre", $nombre);
            $sql->bindParam(":apellidos", $apellidos);
            $sql->bindParam(":correo", $correo);
            $sql->bindParam(":contrasena", $contrasena);
            $sql->execute();
            $id = $con->lastInsertId();
            $con = null;
            if ($id != 0) {
                header("Location: ../index.html");
            } else {
                header("location: error.html");
            }//Fin si

        } catch (PDOException $e) {
            header("location: error.html");
        }

    }//Fin si

?>