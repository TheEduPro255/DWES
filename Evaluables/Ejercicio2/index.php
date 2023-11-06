<?php
include 'config/tests_cnf.php';
if (isset($_POST["seleccionar"]) && isset($_POST["tests"])) {
    $index = $_POST["tests"];
    if (isset($_POST["tests"])) {
        foreach($aTests as $test){
            if($test["idTest"]==$index){
                $test_seleccionado=$test;
                break;
            }
        }
        $_POST["test_seleccionado"]= $test_seleccionado;
    } else {
        echo "<h1>No se ha encontrado el test seleccionado</h1>";
        exit;
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
    <h1>Elige un test</h1>
    <form method="post" action="mostrar_test.php">
        <select name="tests">
            <?php
            foreach ($aTests as $test) {
                echo "<option value=" . $test["idTest"] . ">test " . $test["idTest"] . "---" . $test["Permiso"] . "---" . $test["Categoria"] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" name="seleccionar" value="seleccionar" />
    </form>
</body>
</html>