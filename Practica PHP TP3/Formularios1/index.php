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
            <select id = "estudios" name = "estudios">
                <option value = "no_estudio"> No poseo estudios </option>
                <option value = "primaria"> Primaria </option>
                <option value = "secundaria"> Secundaria </option>
            </select>
        </div>

        <a href = "resultado.php"> <input type = "submit" name = "register" values = "Enviar"> </a>

</body>
</html>