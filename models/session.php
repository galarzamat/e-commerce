<?php
    function cerrarSes(){
        session_unset();
        session_destroy();
        header('location: index.php');
    }
    session_start();
?>