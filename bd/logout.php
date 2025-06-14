<?php
session_start();
unset($_SESSION["s_usuario"]);
session_destroy();
?>
<script>
    function cerrar(){
        window.location.href = "../index.php";
    }
    cerrar();
</script>