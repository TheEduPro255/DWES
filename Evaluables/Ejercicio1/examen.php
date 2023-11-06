<?php
include "config/verbos_conf.php";
if(isset($_POST["enviar"])){
    $keys = array_rand($verbosIrregularesEsp, $_POST["numVerbs"]);
    $numPreguntas = $_POST["numQuestions"];
    $preguntas = array();
    foreach($keys as $key){
        $formasVerbales = array_rand($verbosIrregularesEsp[$key], min($numPreguntas, 3));
        $preguntas[$key] = array();
        
        if(!is_array($formasVerbales)) {
            $formasVerbales = array($formasVerbales);
        }
        
        foreach($formasVerbales as $indice){
            $preguntas[$key][$indice] = $verbosIrregularesEsp[$key][$indice];
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
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "correccion.php">
        <table border = "solid">
            <tr>
                <th>Español</th>
                <th>Infinitivo</th>
                <th>Past Simple</th>
                <th>Past Participle</th>
            </tr>
            <?php
            foreach($preguntas as $key => $value){
                echo "<tr>";
                echo "<th>".$key."</th>";
                for($i = 0; $i <= 2 ;$i++){
                    if(array_key_exists($i,$value)){
                        echo "<td><input type = 'text' name =".$key."/".$i. "/ ></td>";
                    }
                    else{
                        echo "<td>".$verbosIrregularesEsp[$key][$i]."</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <input type = "submit" name = "corregir" value = "corregir"/>
    </form>         
</body>
</html>