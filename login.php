<?php
/*
    Probamos a ver si el usuario existe, y sino lo mandamos
    a la página de registro.

*/

session_start();

// Vemos si el usuario está seteado o no.
if(isset($_SESSION['usuario']))
{
    header('Location: contenido.php');
}
else
{
    header('Location: registro.php')
}












?>