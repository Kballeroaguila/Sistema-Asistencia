<?php


session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../Proyecto/index.php");
}

 $servidor ="localhost";
  $usuario = "root";
  $clave = "";
  $baseDeDatos = "asistencia_proyecto";

  $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

 
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Iconos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
body {
    font-family:'Franklin Gothic Medium';
    background: radial-gradient(circle, #da3c3c , #921e4d 50%);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;

}
.form-container {
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
}

h2 {

 font-family: 'Lucida Grande';
font-size:50PX;
    text-align: center;
    color: #eccca1;

}

.input-group {
    display: flex;
    align-items: center;
    margin-bottom: 18px;
    border: 1px solid #a93226;
    border-radius: 5px;
    padding: 8px 12px;
    background-color: #FFFFFF;
}

.input-group i {
    color: #000000;
    margin-right: 12px;
    font-size: 1.1em;
}

.input-group input,
.input-group textarea {
    outline: none;
    flex-grow: 1;
    padding: 8px 0;
    font-size: 1em;
    border:none;
    background-color: transparent; /* Para que el fondo del input sea transparente */
}

.input-group input::placeholder,
.input-group textarea::placeholder {
    color: #000000;
}

.input-group textarea {
    resize: vertical;
    min-height: 80px;
    padding-top: 5px; /* Ajuste para el textarea */
}

button {
    width: 100%;
    padding: 12px;
    background-color:#B3876C;
    color: rgb(0, 0, 0);
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #9c694a;
}
</style>
    </head>
<body>
    <div class="form-container">
      <?php
                if (isset($_POST['enviar'])) {
                    $id = $_POST['id'];
                    $Componente = $_POST['Componente'];
                    $Nombre = $_POST['Nombre'];
                    $Clave = $_POST['Clave'];
                    $Semestre = $_POST['Semestre'];
                    $Grupo = $_POST['Grupo'];
                    $Materia = $_POST['Materia'];
                    $Horario = $_POST['Horario'];
                    $Docente = $_POST['Docente'];
                    $Periodo = $_POST['Periodo'];

                    $sql="UPDATE alumnos SET Componente='".$Componente."',Nombre='".$Nombre."',Clave='".$Clave."',Semestre='".$Semestre."',Grupo='".$Grupo."',Materia='".$Materia."',Horario='".$Horario."',Docente='".$Docente."',Periodo='".$Periodo."' where id='".$id."'";
                    $resultado=mysqli_query($enlace,$sql);
                    if ($resultado) {
                        echo "<script language='JavaScript'> alert('Los datos se actualizaron correctamente'); location.assign('mostrarDatos.php'); </script>";
                    } else {
                        echo "<script language='JavaScript'> alert('Los datos NO se actualizaron '); location.assign('usuario.php'); </script>";
                    }
                    mysqli_close($enlace);
                }else{
                    $id=$_GET['id'];
                    $sql="SELECT * from alumnos where id='".$id."'";
                    $resultado=mysqli_query($enlace,$sql);

                    $fila=mysqli_fetch_assoc($resultado);
                    $id = $fila['id'];
                    $Componente=$fila['Componente'];
                    $Nombre=$fila['Nombre'];
                    $Clave=$fila['Clave'];
                    $Semestre=$fila['Semestre'];
                    $Grupo=$fila['Grupo'];
                    $Materia=$fila['Materia'];
                    $Horario=$fila['Horario'];
                    $Docente=$fila['Docente'];
                    $Periodo=$fila['Periodo'];

                    mysqli_close($enlace);

            ?>
        <h2>Registro de Usuario</h2>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
             <input type="text" name="id" value="<?php echo $id  ?>">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="Componente" placeholder="Componente" value="<?php echo $Componente  ?>" required>
                <input type="text" name="id" value="<?php echo $id  ?>">
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="number" name="Clave" placeholder="Clave" value="<?php echo $Clave  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="Semestre" placeholder="Semestre"  value="<?php echo $Semestre  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="Grupo" placeholder="Grupo" value="<?php echo $Grupo  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="text" name="Materia" placeholder="Materia" value="<?php echo $Materia  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="Horario" placeholder="Horario" value="<?php echo $Horario  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-city"></i>
                <input type="text" name="Docente" placeholder="Docente" value="<?php echo $Docente  ?>" required>
            </div>

            <div class="input-group">
                <i class="fas fa-flag"></i>
                <input type="text" name="Periodo" placeholder="Periodo" value="<?php echo $Periodo  ?>" required>
            </div>


            <input type="submit" name="enviar" value="ACTUALIZAR">
                <a href="usuario.php">Regresar</a>
        </form>
        <?php
           }
           ?>
    </div>
</body>
</html>
