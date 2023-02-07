<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Name = $_GET["nombre"];
        $App = $_GET["apellidopaterno"];
        $Apm = $_GET["apellidomaterno"];
        $Correo = $_GET["correo"];
        $Cont = $_GET["contraseña"];

        //realizar la conexion
        $con = mysqli_connect("localhost", "root", "", "viajandi");

        //revisar la conexion
        if(mysqli_connect_errno()){
            echo "Exixte un error en la conexión ". mysqli_connect_error();
            exit();
        }

        $inserta = "Insert into Registro_v Values ('".$Name."','".$App."','".$Apm."','".$Correo."','".$Cont."')";

        if(mysqli_query($con, $inserta)){

            echo "Se realizo la insercción";

        }else{
            echo "Error al insertar registro ". mysqli_error($con);

        }

        mysqli_close($con);

    ?>
    
</body>
</html>