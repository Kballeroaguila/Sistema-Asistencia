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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <script type="text/javascript">
    function confirmar(){
      return confirm('¿Estas seguro?, se eliminaran los datos');
    }
  </script>
  <title>Tabla Mejorada y Visual</title>

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 50px;
      background: linear-gradient(135deg, #700128, #921e4d);
    }

    table {
      width: 80%;
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 5px;
      box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
      background-color: #f0e9e3;

    }

    caption {
      letter-spacing: 1.1px;
      font-weight: bold;
      margin: 25px 0;
      color: #eccca1;
      font-family: 'Lucida Grande';

    }

    thead {
      background-color: #d1bfae;
    }

    th, td {
      padding: 8px 10px;
      text-align: left;
      vertical-align: top;
      border: 2px double #d1bfae;
      border-left: none;
      border-right: none;
      transition: all 0.3s ease;
      font-family: 'Open Sans', sans-serif;
    }

    th {
      color: #222;
      background-color: #bc9c7b;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 15px;
      font-family: 'Open Sans', sans-serif;

    }

    tbody tr:nth-child(even) td {
      background-color: #d3b895;
    }

    tbody td:hover {
      background-color: #e4cfb4;
      cursor: pointer;
      transform: scale(1.02);

    }

    tfoot {
      font-style: italic;
      color: #555;
      background-color: #f0e9e3;
      border-top: 2px solid #bc9c7b;
    }

    tfoot td {

      padding: 15px;
      border-color: #d1bfae;
    }
      button {
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

button::after {
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

button:hover {
 color: var(--btn-color);
 background-color: var(--glow-color);
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 2em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
}

button:active {
 box-shadow: 0 0 0.6em .25em var(--glow-color),
        0 0 2.5em 2em var(--glow-spread-color),
        inset 0 0 .5em .25em var(--glow-color);
}
    
  </style>
</head>
<body>
  <button onclick="location.href='inicio.php'">Regresar</button>
  <button onclick="location.href='../Proyecto/includes/lectorexcel.php'">Excel</button><br><br>

  <table>
                <tr>
                  <td>id</td>
                  <td>Componente</td>
                  <td>Nombre</td>
                  <td>Clave</td>
                  <td>Semestre</td>
                  <td>Grupo</td>
                  <td>Materia</td>
                  <td>Horario</td>
                  <td>Docente</td>
                  <td>Periodo</td>
                  <td>Hora Registro</td>
                  <td>Fecha</td>
                  <td>Asistencia</td>
                </tr>

                <?php
                $sql="SELECT * from alumnos";

                $result = mysqli_query ($enlace, $sql);
                if($result -> num_rows >0){

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                  <td><?php echo $mostrar['id'] ?></td>
                  <td><?php echo $mostrar['Componente'] ?></td>
                  <td><?php echo $mostrar['Nombre'] ?></td>
                  <td><?php echo $mostrar['Clave'] ?></td>
                  <td><?php echo $mostrar['Semestre'] ?></td>
                  <td><?php echo $mostrar['Grupo'] ?></td>
                  <td><?php echo $mostrar['Materia'] ?></td>
                  <td><?php echo $mostrar['Horario'] ?></td>
                  <td><?php echo $mostrar['Docente'] ?></td>
                  <td><?php echo $mostrar['Periodo'] ?></td>
                  <td><?php echo $mostrar['horaRegistro'] ?></td>
                  <td><?php echo $mostrar['fecha'] ?></td>
                  <td><?php echo $mostrar['Asistencia'] ?></td>
                  <td><?php echo "<a href='editar.php?id=".$mostrar['id']."'>Editar</a>"?></td>
                  <td><?php echo "<a href='eliminar.php?id=".$mostrar['id']."' onclick='return confirmar()'>Eliminar</a>"?></td>
                </tr>
                <?php
                }
              }
                ?>
              
              
</body>
</html>
