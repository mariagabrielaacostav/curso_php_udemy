<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1> Formulario en PHP GET</h1>
    
    <form method="get" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
        </p>
       
         <input type="submit" value="Enviar Datos">            
    </form>
    
    </br>
    <hr>
    
      <h1> Formulario en PHP Post</h1>
    
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
        </p>
       
         <input type="submit" value="Enviar Datos">            
    </form>
    
    
</body>
</html>

