<?php
    session_start();
    session_destroy();

    header("Location: index.php?controlador=Index&accion=Login")
?>