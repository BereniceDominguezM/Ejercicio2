<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>CONTROL DE DEPORTES</title>
 <link href="estilo_principal.css" rel="stylesheet">
 </head>
 <body>
    <center>
 <header>   
 <?php 
 session_start();
 require 'encabezado.php'; 
 echo "<p id='centrado'>";
 echo 'Bienvenido___ '
 .$_SESSION['admin'].'<br>';

 echo '</p>'; 
 ?>
 </header>
 <section>
 <table border="0" width="800" cellspacing="5"> 
 <tr>
 <td><a href="#">
 <img src="deportes3.jpg" 
 width="150" height="80" /></a>
 </td>
 <td><a href="#">Registro de Deportes</a></td>
 </tr>
 <tr>
 <td><a href="#">
 <img src="deportes2.jpg" 
 width="150" height="80" /></a>
 </td>
 <td><a href="#">Listado de Deportes</a></td>
 </tr>
 <tr>
 <td>
                <a href="javascript:imprimirPagina()">
                    <img src="deportes4.jpg" width="150" height="80" alt="Deportes" />
                </a>
            </td>
            <td>
                <a href="javascript:imprimirPagina()">Imprimir</a>
            </td>
 </tr>
 </table>
 </section>
 <footer>
 <?php require 'pie.php'; ?>
 <a href='cerrar.php'> Cerrar Sesion </a>
 </footer>
    </center> 
</body>
</html>
