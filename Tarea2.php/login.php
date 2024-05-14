<?php
 session_start();
 
 if ($_POST['txtUsuario']=='Berenice' and $_POST['txtClave']=='123')
 $_SESSION['admin']=$_POST['txtUsuario'];
 else 
 $_SESSION['error']='Usuario incorrecto';
 
 header('location:index.php');
?>