<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../Proyecto/index.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bimbo</title>
  <link rel="stylesheet" href="styles.css">
</head>

<style>
/* Reseteo de márgenes y padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Encabezado */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background-color: #af4c65; 
}

#logo {
  height: 8vh; /* Altura relativa al viewport */
}

nav ul {
  display: flex;
  gap: 2rem;
}

nav a {
  color: #C4AF76;
  text-decoration: none;
  font-size: 1rem;
  font-weight: bold;
  text-transform: uppercase;
}

/* Sección principal */
#hero {
  width: 100%;
  
  background-image: url('imagen-destacada.jpg');
  background-size: cover;
  background-position: center;
}

/* Sección de productos con Grid */
#productos {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Usamos fr para un layout flexible */
  gap: 2rem;
  padding: 2rem;
}

.producto {
  background-color: #f4f4f4;
  border-radius: 8px;
  padding: 1rem;
  text-align: center;
}

.producto img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.producto h3 {
  margin-top: 1rem;
  font-size: 1.25rem;
}

.producto p {
  font-size: 1rem;
  color: #666;
}

/* Pie de página */
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 1rem;
  font-size: 0.875em; /* Usamos em para un tamaño relativo */
}

/* Diseño responsive */
@media (max-width: 768px) {
  header {
    flex-direction: column;
    align-items: flex-start;
  }

  nav ul {
    flex-direction: column;
    gap: 1rem;
  }

  #hero {
   display: flex;
align-items: center;
  }

  footer p {
    font-size: 1rem; /* Aumentamos el tamaño de la fuente en pantallas pequeñas */
  }
}
h1{
color:#C4AF76;
}

.gif-container {
    display: flex;
    justify-content: center; /* Centra horizontalmente */
    align-items: center;     /* Centra verticalmente (si el contenedor tiene altura) */
    height: auto; /* Ajusta según la altura deseada para tu sección */
}
</style>

<body bgcolor="#ffffff">
  <!-- Encabezado -->
  <header>
    <img src="https://cecyteh.edu.mx/images/logos/cecytehidalgo.png" alt="Logo Bimbo" id="logo">
    <nav>
      <ul>
        <li><a href="horario4f.html">Horario del grupo </a></li>
        <li><a href="ingresar.php">Ingresar datos</a></li>
        <li><a href="mostrarDatos.php">Mostrar datos</a></li>
        <li><a  href="../Proyecto/bd/logout.php" role="button">Cerrar Sesión</a></li>
       
      </ul>
    </nav>
  </header>
  
  <!-- Sección principal -->
  <section id="hero">
<center> <h1>SISTEMAS DE CONTROL DE ASISTENCIAS DEL GRUPO 4 F</h1> </center>
<div class="gif-container">
        <img src="lobo_2.gif" alt="Imagen destacada" width="600" height="auto">
    </div>
  </section>


  <!-- Sección de PENDEJITOS -->
 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <!-- Pie de página -->
  <footer>
    <p>Contacto: 123-456-789</p>
    <p>Dirección: Calle la del Cecyte, pachuca York, Estados Unidos Mexicanos</p>
  </footer>

  <script src="jquery/jquery-3.3.1.min.js"></script>    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    <script src="popper/popper.min.js"></script>    
        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
    <script src="codigo.js"></script>    
</body>
</html>