<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="login.php" method="POST">
                <p>Nombre:<input type="text" name="nombre"
                   <?php if (isset($_COOKIE["cook_user"])){echo 'value='.$_COOKIE["cook_user"];}?> required/>
                </p>
                <p>Contraseña:<input type="text" name="pass"
                   <?php if (isset($_COOKIE["cook_pass"])){echo 'value='.$_COOKIE["cook_pass"];}?> required/>
                </p>
                <input type="submit" value="Enviar" />
                <input type="checkbox" name="chkRecordar"> Recordarme                    
            </form>
        </div>
    </body>
</html>

