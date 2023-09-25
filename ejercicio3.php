<?php
$radio = 30;
const pi = 3.14;
$longitud = pi * $radio * 2;
$area = pi *($radio * $radio);
echo "La longitud del circulo es ".$longitud. "<br>";
echo "El area del circulo es ".$area."<br>";
echo "<a href = 'https://github.com/TheEduPro255/DWES/blob/main/ejercicio3.php>Ver codigo</a>'"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Circulo{
            width: <?php echo $radio * 2 ?>px;
            height: <?php echo $radio * 2?>px;
            border-radius: 50%;
            background-color: red;
        }
    </style>
</head>
<body>
    <div class = "Circulo"/></div>
</body>
</html>