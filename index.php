<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario prueba de PHP</title>
</head>
<body>
     <h1><span>Formulario</span> de prueba PHP</h1>
    <form action="register.php" method="post">   
        <div class="cuadro-form">
            <label for="name">Nombre:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Correo electronico:</label><br>
            <input type="email" id="email" name="email" placeholder="Ejemplo: juan@gmail.com" required><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="clave" name="clave" required>
                    <br>
                    <label for="repetir">Repetir Contraseña</label><br>
                    <input type="password" id="repetir" name="repetir" required>
                    <br>
                    <label for="recuperacion">Correo de recuperacion</label><br>
                    <input type="email" id="recuperacion" name="recuperacion" required>
                    <br>
                    <label for="telefono">Numero de telefono</label><br>
                    <input type="number" id="numero" name="numero" maxlength="10" minlength="10" required>
                    <br>
                    <br>
            <input type="submit" name="Enviar" id="Enviar" value="Enviar" class="btn">
        </div>      
    </form>
    <br>
    <br>
    <br>
    <footer>
        <h3>Creado por Dalvin Sosa</h3>
    </footer>
    <?php
            include("register.php");
            ?>
</body>
</html>