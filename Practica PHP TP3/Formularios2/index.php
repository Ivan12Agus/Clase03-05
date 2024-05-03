<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method = "post" action = "resultado.php">

        <h2>Ingrese los datos pedidos</h2>

        <div>
            <input type = "text" name = "name" placeholder = "nombre">
        </div>
        <div>
            <input type = "text" name = "direccion" placeholder = "direccion">
        </div>

        <br>

        <div>
            <input type = "checkbox" name = "jyq" value = "jamon y queso">
            Jamon y queso
    	</div>
        <div>
            <input type = "text" name = "cant_1" placeholder = "cantidad">
        </div>

        <br>

        <div>
            <input type = "checkbox" name = "napo" value = "napolitana">
            Napolitana
    	</div>
        <div>
            <input type = "text" name = "cant_2" placeholder = "cantidad">
        </div>

        <br>

        <div>
            <input type = "checkbox" name = "mozza" value = "mozzarella">
            Mozzarella
    	</div>
        <div>
            <input type = "text" name = "cant_3" placeholder = "cantidad">
        </div>

        <a href = "resultado.php"> <input type = "submit" name = "register" values = "Enviar"> </a>

</body>
</html>