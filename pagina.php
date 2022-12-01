<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crea una función operaciones() que reciba tres parámetros $v1, $v2 y $oper; y
realice las siguientes operaciones:
 Si $oper vale 1, la función devuelve la suma de $v1 y $v2.
 Si $oper vale 2; la función devuelve la resta de $v1 y $v2.
 Si $oper vale 3; la función devuelve el producto de $v1, y $v2.
 Si $oper vale 4; la función devuelve el cociente de $v1 y $v2.
En caso de que no se indique ningún valor para el parámetro $oper, debe devolverse la
suma de $v1 y $v2.  -->

<?php
    include 'funlib.php';
    echo operaciones(5, 10);
    ?>
   </body>
</html>