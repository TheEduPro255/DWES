<?php
    include 'config/tests_cnf.php';
    if (isset($_POST["tests"])) {
        foreach($aTests as $testSeleccionado){
            if($testSeleccionado["idTest"]==$_POST["tests"]){   
                $id = $testSeleccionado["idTest"];
                $carpeta = "dir_img_test".$id;
                $test=$testSeleccionado;
                break;
            }
        }
    }
    else{
        "<h1>No se ha encontrado el test</h1>";
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
    <form method = 'post' action = 'corregir.php'>
        <?php 
            foreach($test["Preguntas"] as $pregunta){
                echo "<span>".$pregunta["Pregunta"]."</span>";
                $rutaImagen = $carpeta."/img".$pregunta["idPregunta"].".jpg";
                echo "<br>";
                if(file_exists($rutaImagen)){
                    echo "<img src =".$rutaImagen." width = 10% />";
                    echo "<br>";
                }
                foreach($pregunta["respuestas"] as $opcion){
                    echo "<input type = 'radio' name =".$pregunta["idPregunta"]." value =" .$opcion[0]." />";
                    echo "<label>".$opcion."</label>";
                    echo "<br>";
                }
                echo "<br>";
            }
            echo "<input type='hidden' name='idTest' value =".$_POST["tests"]." />";
        ?>
        <input type = 'submit' name = 'corregir' value = 'corregir'/>

    </form>    
</body>
</html>