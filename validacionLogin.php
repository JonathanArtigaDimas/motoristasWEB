<?php


include("conexion.php");

if(isset($_POST['send1'])){

    $nUsuario = $_POST['userName'];
    $nContraseña = $_POST['passwordUser'];
    $query = mysqli_query($conex, "SELECT * from user WHERE userName= '$nUsuario' ");
    $no = mysqli_num_rows($query);
    if($no>0)
    {
        $data = mysqli_fetch_assoc($query);
        if($data['passwordUser']==$nContraseña)
        {
            echo 'Ingresado correctamente';
            header("Location:formulario.php");
        }
        else
        {
            echo 'Contraseña incorrecta.';
        }
    }
    else
        {
            echo 'Usuario incorrecto';
        }
}











/*
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
                    print("INICIO CORRECTO");
                    header("Location:formulario.php");
                    exit();
                }
            }
        }
            
    }



 */


?>