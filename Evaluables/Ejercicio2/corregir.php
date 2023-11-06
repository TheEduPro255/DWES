<?php
    include 'config/tests_cnf.php';
    
    if (isset($_POST["corregir"])) {
        $soluciones=array();
        foreach($aTests as $testSeleccionado){
            if($testSeleccionado["idTest"]==$_POST["idTest"]){
                $soluciones=$testSeleccionado["Corrector"];
                break;
            }
        }
        $caraFeliz = "&#128512";
        $caraTriste ="&#128528";  
        $total_preguntas = count($soluciones);
        $correctas = 0;
        for ($i=1; $i <= 10 ; $i++) { 
            $respuesta = $_POST[$i];
            if($respuesta == $soluciones[$i -1]){
                $correctas++;
            }
        }
        $incorrectas = $total_preguntas - $correctas;
        echo "<h1>Nota del test</h1>";
        echo "<h2>Correctas: ".$correctas. "</h2>";
        echo "<h2>Incorrectas: ".$incorrectas."</h2>";
        if($correctas > $incorrectas){
            echo "<h3>Has aprobado el examen".$caraFeliz."</h3>";
        }
        else{
            echo "<h3>No has aprobado el examen".$caraTriste."</h3>";
        }
            
        
       
    }
    else{
        "<h1>No se puede corregir</h1>";
    }
    
   
?>