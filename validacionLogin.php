<?php
        session_start();
    include("conexion.php");

    //Acá el envio a la base de datos de el login
    if(isset($_POST['send1'])){
        if(
            strlen($_POST['userName']) >= 1 &&
            strlen($_POST['passwordUser']) >= 1
        ){
            $nUsuario = trim($_POST['userName']);
            $nContraseña = trim($_POST['passwordUser']);
            $ok = "false";
            $stmt = $conex ->prepare("SELECT userName, passwordUser, id from user WHERE userName = ?");

            $stmt ->bind_param("s",$nUsuario);
            $stmt ->execute();
            if ($stmt) {
                $ok = "true";
            }

            $result = $stmt->got_result();

            if ($result->num_rows > 0){
                $row = $result -> fetch_assoc();
                $hash_passwordUser = $row['passwordUser'];

                if(password_verify($nContraseña,$hash_passwordUser)){
                    $_SESSION['userName'] = $nUsuario;
                    $_SESSION['id'] = $row['id'];

                    header("Location:formulario.php");
                    exit();
                }
            }
        }
            
    }






?>