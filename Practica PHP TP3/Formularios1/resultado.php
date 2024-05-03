<?php

    $nombre = $_POST['name'];
    $estudios = $_POST['estudios'];

    echo "<h2>".$nombre."</h2>";
    echo "Tus estudios son: <br>";

    if($estudios == "no_estudio"){

        echo "<h3>No tienes estudios</h3>";

    }
    else if($estudios == "primaria"){

        echo "<h3>Tienes hasta la primaria terminada</h3>";

    }
    else if($estudios == "secundaria"){

        echo "<h3>Tienes hasta la secundaria terminada</h3>";

    }

?>