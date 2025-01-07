<?php
    include("conexion.php");
    



    //Envio a la base de datos sobre los los viajes de los motoristas
    if(isset($_POST['send'])){
        if(
            strtoupper($_POST['nombreMotorista']) >= 1 &&
            strtoupper($_POST['nombreBarco']) >= 1 &&
            strlen($_POST['fecha']) >= 1 &&
            strtoupper($_POST['nombreDueñoCamion']) >= 1 &&
            strlen($_POST['placaCamion']) >= 1 &&
            strlen($_POST['numeroViaje']) >= 1 &&
            strtoupper($_POST['nombreContenedor']) >= 1 &&
            strlen($_POST['numeroContenedor']) >= 1 &&
            strlen($_POST['numeroFicha']) >= 1 &&
            strtoupper($_POST['tipoDeViaje']) >= 1
        ){
            $Motorista = trim($_POST['nombreMotorista']);
            $Barco = trim($_POST['nombreBarco']);
            $fecha = trim($_POST['fecha']);
            $DueñoCamion = trim($_POST['nombreDueñoCamion']);
            $Camion = trim($_POST['placaCamion']);
            $Viaje = trim($_POST['numeroViaje']);
            $nomContenedor = trim($_POST['nombreContenedor']);
            $numContenedor = trim($_POST['numeroContenedor']);
            $numFicha= trim($_POST['numeroFicha']);
            $dViaje = trim($_POST['tipoDeViaje']);
            $consulta = "INSERT INTO viajes(nombreMotorista, nombreBarco, fecha, nombreDueñoCamion, placaCamion, numeroViaje, nombreContenedor, numeroContenedor,numeroFicha,tipoDeViaje)
                VALUES (UPPER('$Motorista'),UPPER('$Barco'),'$fecha',UPPER('$DueñoCamion'),'$Camion','$Viaje',UPPER('$nomContenedor'),'$numContenedor','$numFicha',UPPER('$dViaje'))";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    ?>
                        <h3 class="success text-center text-white fs-3 mt-3">Tu registro se a completado</h3>
                    <?php
                }else{
                    ?>
                        <h3 class="error text-center text-white">Ocurrio un error</h3>
                    <?php
                }
        }
    }

    

    
    

?>