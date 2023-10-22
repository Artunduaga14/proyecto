<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fonda Los Arrieros</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="../img/imagenes/logo.png" rel="icon">

    <link href="formulario1.css" rel="stylesheet">
    <link href="registro.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>

<body>

    <form class="form" method="post">
        <img class="img-fluid" src="../img/imagenes/logo.png" alt="Logo">
        <p class="title">Fonda Los Arrieros </p>
        <p class="message">digite la siguiente informacion </p>

        <label>
            <input required="" type="text" name="name" class="input">
            <span>Nombre y pellido</span>
        </label>

        <label>
            <input required="" type="email" name="email" class="input">
            <span>Email</span>
        </label>

        <label>
            <input required="" type="date" name="nacimiento" class="input">

        </label>

        <button class="submit" name="register">Registrarse</button>
        <p class="signin">Regresar <a href="../index.html">Inicio</a> </p>
    </form>


    <div>
        <img class="img_fluid" src="../img/imagenes/logo.png" alt="Logo">
        <p class="titulo">Fonda Los Arrieros </p>
        <p class="sub-title">digite la siguiente informacion </p>
        <form class="formi" method="post">
            <input type="text" class="input" name="name" placeholder="Name">
            <input type="email" class="input" name="email" placeholder="Email">
            <input type="date" class="input" name="nacimiento" placeholder="Fecha Nacimiento">
            <button class="formi-btn" name="register">Registrarse</button>
        </form>

        <div class="buttons-container">
            <div class="apple-login-button">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="apple-icon" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    
                </svg>
                <span href="../index.html">Regresar</span>
            </div>
            <div class="google-login-button">
                
                <a href="../index.html">Regresar</a>
            </div>
        </div>
    </div>
    <?php
    include("registrar.php");
    ?>
</body>

</html>