<?php
$servidor ="localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "asistencia_proyecto";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);


    $id=$_GET['id'];

    $sql="DELETE from alumnos where id='".$id."'";
    $resultado=mysqli_query($enlace,$sql);

    if ($resultado) {
        echo "<script language='JavaScript'> alert('Los datos se eliminaron correctamente de la BD'); location.assign('mostrarDatos.php'); </script>";
    } else {
        echo "<script language='JavaScript'> alert('Los datos No se eliminaron de la BD'); location.assign('usuario.php'); </script>";
    }

?>
