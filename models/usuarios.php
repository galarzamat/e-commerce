<?php
    function verify($dni,$pass){
        global $db;
        $sql = "SELECT (SELECT isAdmin FROM usuarios WHERE dni='$dni' AND contra='$pass') As isAdmin";
        $reg = $db->query($sql);
        if($reg==NULL)return NULL;
        return $reg->fetch_array()[0];
    }
    function register($dni,$pas,$nom,$ape,$tel,$dir,$cp){
        global $db;
        $sql = "INSERT INTO usuarios(dni,contra,nombre,apellido,telefono,direccion,cp)
                VALUES('$dni','$pas','$nom','$ape','$tel','$dir','$cp')";
        $ok = $db->query($sql);
    }
    function getDat($dat){
        if (isset($_SESSION['user'])){
            global $db;
            $sql = "SELECT $dat FROM usuarios WHERE dni=".$_SESSION['user'];
            return $db->query($sql)->fetch_array()[0];
        }else{
            return 0;
        }
    }
    function avatear($av){
        global $db;
        $sql = "UPDATE usuarios SET avatar='$av' WHERE dni='".$_SESSION['user']."'";
        $ok = $db->query($sql);
        header("location: index.php");
    }
    function conectar(){
        global $db;
        $db = new mysqli('localhost','root','usbw','compras');
    }
    conectar();
?>