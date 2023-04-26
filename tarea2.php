<html>
    <head>
        <title>Sueldo por ventas y número de hijos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>


        <form method="post" action="">
            Ingresar el precio de la gaseosa: <br>  <input type="text" name="precio"><br>
            Ingresar la cantidad de gaseosas: <br>  <input type="text" name="cantidad"><br>
            Resultado : <br>
            <input type="submit" name="Calcular" value="Calcular">
            <input type="reset" name="Cancelar" value="Cancelar">
        </form>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    $nueprecio = 0.05*$precio;
    $icompra = $nueprecio*$cantidad;
    $idescuento = 0.07*$icompra;
    $ipagar = $icompra-$idescuento;
    $obsequio = 2*$cantidad;
    echo 'Importe de la compra: ' . $icompra . "<br/>\n";
    echo 'Importe de del descuento: ' . $idescuento . "<br/>\n";
    echo 'Importe a pagar: ' . $ipagar . "<br/>\n";
    echo 'Obsequio: ' . $obsequio . "<br/>\n";
    
}
 
?>


    </body>
</html>