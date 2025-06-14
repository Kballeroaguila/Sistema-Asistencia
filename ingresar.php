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

.button {
 --glow-color: rgb(217, 176, 255);
 --glow-spread-color: rgba(191, 123, 255, 0.781);
 --enhanced-glow-color: rgb(231, 206, 255);
 --btn-color: rgb(100, 61, 136);
 border: .20em solid var(--glow-color);
 padding: 0.5em 1.5em;
 color: var(--glow-color);
 font-size: 14px;
 font-weight: bold;
 background-color: var(--btn-color);
 border-radius: 0.9em;
 outline: none;
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 1em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
 text-shadow: 0 0 .5em var(--glow-color);
 position: relative;
 transition: all 0.3s;
}

.button::after {
 pointer-events: none;
 content: "";
 position: absolute;
 top: 120%;
 left: 0;
 height: 100%;
 width: 100%;
 background-color: var(--glow-spread-color);
 filter: blur(2em);
 opacity: .7;
 transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
}

.button:hover {
 color: var(--btn-color);
 background-color: var(--glow-color);
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 2em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
}

.button:active {
 box-shadow: 0 0 0.6em .25em var(--glow-color),
        0 0 2.5em 2em var(--glow-spread-color),
        inset 0 0 .5em .25em var(--glow-color);
}
</style>
    </head>
<body>
    <div class="form-container">
        <h2>Registro de Usuario</h2>
        <form action="" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="Componente" placeholder="Componente" required>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="Nombre" placeholder="Nombre" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="Clave" placeholder="Clave" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="Semestre" placeholder="Semestre" required>
            </div>

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="Grupo" placeholder="Grupo" required>
            </div>

            <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="text" name="Materia" placeholder="Materia" required>
            </div>

            <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="Horario" placeholder="Horario" required>
            </div>

            <div class="input-group">
                <i class="fas fa-city"></i>
                <input type="text" name="Docente" placeholder="Docente" required>
            </div>

            <div class="input-group">
                <i class="fas fa-flag"></i>
                <input type="text" name="Periodo" placeholder="Periodo" required>
            </div>


            <input type="submit" name="registro" class="button">
            <input type="reset" class="button"><br><br><br>
            <button onclick="location.href='inicio.php'" class="button">Regresar</button>
        </form>
    </div>
</body>
</html>


<?php


if (isset($_POST['registro'])) {
  $Componente = $_POST['Componente'];
  $Nombre = $_POST['Nombre'];
  $Clave = $_POST['Clave'];
  $Semestre = $_POST['Semestre'];
  $Grupo = $_POST['Grupo'];
  $Materia = $_POST['Materia'];
  $Horario = $_POST['Horario'];
  $Docente = $_POST['Docente'];
  $Periodo = $_POST['Periodo'];

  $insertarDatos = "INSERT INTO alumnos VALUES('','$Componente','$Nombre','$Clave','$Semestre','$Grupo','$Materia','$Horario','$Docente','$Periodo','','','')";

  $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
}


 ?>
