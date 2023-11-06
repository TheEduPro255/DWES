<?php
include "config/verbos_conf.php";

if(isset($_POST["corregir"])){
    $respuestasUsuario = $_POST;
    unset($respuestasUsuario["corregir"]);
    $respuestasCorrectas = $verbosIrregularesEsp;
    $correctas = 0;
    $incorrectas = 0;

    foreach($respuestasUsuario as $key => $value){    
        $partes = explode("/", $key);
        $verbo = $partes[0];
        $index = $partes[1];
      
        if($respuestasCorrectas[$verbo][$index] == $value){
            $respuestasCorrectas[$verbo][$index] = "<span style='background-color:green' color = 'black'>".$value."</span>";
            $correctas++;
        } else {
            $respuestasCorrectas[$verbo][$index] = "<span style='background-color:red' color = 'black'>".$value."</span>";
            $incorrectas++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrección del Examen</title>
</head>
<body>
    <h1>Resultados de la Corrección</h1>
    <p>Respuestas correctas: <?= $correctas ?></p>
    <p>Respuestas incorrectas: <?= $incorrectas ?></p>
    <table border="solid">
        <tr>
            <th>Español</th>
            <th>Infinitivo</th>
            <th>Past Simple</th>
            <th>Past Participle</th>
        </tr>
        <?php
        unset($_POST["corregir"]);
        foreach($respuestasCorrectas as $key2 => $value2){
            $is_read = false;
            foreach($_POST as $key => $value){
                $partes = explode("/", $key);
                $verbo = $partes[0];
                if($verbo == $key2 && !$is_read){
                    echo "<tr>";
                    echo "<th>".$key2."</th>";
                    foreach($value2 as $verb){
                        echo "<td>".$verb."</td>";
                    }
                    echo "<tr>";
                    $is_read = true;
                } 
            }
        }
        ?>
    </table>
</body>
</html>
