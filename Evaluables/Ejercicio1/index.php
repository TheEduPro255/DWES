<?php
include "config/verbos_conf.php";
if(isset($_POST["enviar"])){
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
    <form method = "post" action = "examen.php">
        <input type = "text" name = "numVerbs" placeholder = "Cuantos verbos quieres"/><br>
        <select name = "numQuestions">
            <option value = "1">Principiante</option>
            <option value = "2">Intermedio</option>
            <option value = "3">Avanzado</option>
        </select><br>
        <input type = "submit" name = "enviar" value = "Examinar"/>
    </form>
</body>
</html>