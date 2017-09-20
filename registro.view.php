<!--

Todos los renglones son un grupo cada uno. Ej: El ícono del usuario, con el campo e un grupo, y así.
eso se ve en la etqueta form, cada elemento pertenece a una clase form-group

-->


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registrate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class="contendor">
            <h1 class="titulo">Registrate</h1>
            <hr class = 'border'>
      
<!--
            Usamos php en el action para redirigir a la misma página.
-->
            <form action=" <?php  echo htmlspecialchars( $_SERVER [ 'PHP_SELF' ]);   ?> "
                     method="POST" 
                     class ="formulario" 
                     name = "login">


                     <div class="form-group">
            <!--
                La clase hace referencia a la clase del ícono de la página que importamos
            -->
                        <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder = "Usuario">
                     </div>
                    
                     <div class="form-group">
                        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder = "Contraseña">
                     </div>

                     <div class="form-group">
                        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder = "Repetir contraseña">
<!--
        Usamos un poco de Java Script para que al presionar el boton me envien los datos.
        Cuando el usuario haga click en este elemento hago login.subit (OBS! login es el name del formulario)
        Cómo controlamos que funciona? Ejecutamos y damos click en el boton y la página se tiene que refrecar.
-->     
                        <i class="submit-btn fa fa-arrow-right" onclick ="login.submit()"></i>
                     
                     </div>
<!--
    Muestro si hay errores
-->
                     <?php   if(!empty($errores)):  ?>

                        <div class="error">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>                        


                     <?php endif; ?>


            </form>

            <p class="texto-registrate">
                ¿Ya tenés cuenta?
                <a href="views/login.view.php">Iniciar sesión</a>
            </p>

        </div>

    
    </body>
</html>