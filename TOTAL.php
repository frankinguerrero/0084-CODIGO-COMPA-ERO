<html>
 <head>
     <title> </title>
 </head>

 <!-- Aqui se encuentra el fondo ¡--> 

<body background="IMG/1.jpg">
<br/>
<br/>
<br/>
<!-- Titulo central dee la pagina ¡-->

    <h1 text align='center'>Compra final</h1>

    <p text align='center'>Aqui escontraras el resultado de la compra total, teniendo en cuenta los productos selecionados</p>
    <center>
    <br>
<?php

    //Variables

        $tennis = $_POST ["tennis"];
        $consola = $_POST ["consola"];
        $neveras = $_POST ["neveras"];
        $cel = $_POST ["cel"];

        
        
        //Condicional de recomendacion


        if ($tennis == 'Adidas_Yeezi'){
            $tennis=120000;
            echo "Los tennis $tennis tienen un valor de 120.000<br>";
        }elseif ($tennis == 'Nike_Jordan'){
            $tennis=140000;
            echo "Los tennis $tennis tienen un valor de 140.000<br>";
        }elseif ($tennis == 'Puma_Califorma'){
            $tennis=130000;
            echo "Los tennis $tennis tienen un valor de 130.000<br>";  
        }else {
            echo "No añadiste nada a tu carrito <br>";
          }


          if ($consola == 'Xbox series x'){
            $consola=2100000;
            echo "Los consola Xbox series x tienen un valor de 2.100.000<br>";
        }elseif ($consola == 'Xbox 360'){
            $consola=1120000;
            echo "Los consola Xbox 360 tienen un valor de 1.120.000<br>";
        }elseif ($consola == 'Xbox One'){
            $consola=2120000;
            echo "Los consola Xbox One tienen un valor de 2.120.000<br>";  
        }else {
            echo "No añadiste nada a tu carrito<br>";
          }




          if ($neveras == 'Challenger'){
            $neveras=1599000;
            echo "La nevera Challenger tienen un valor de 1.599.000<br>";
        }elseif ($neveras == 'LG'){
            $neveras=1399000;
            echo "La nevera LG tienen un valor de 1.399.000<br>";
        }elseif ($neveras == 'Samsung'){
            $neveras=2180000;
            echo "La nevera Samsung tienen un valor de 2.180.000<br>";
        }else {
            echo "No añadiste nada a tu carrito<br>";
          }


          if ($cel == 'Xiaomi Redmi note 9s'){
            $cel=1299000;
            echo  "El celular Xiaomi Redmi note 9s tiene un valor de 1,299.000<br><br><br><br><br><br>";
        }elseif ($cel == 'Iphone 12'){
            $cel=4270000;
            echo "El celular Iphone 12 tiene un valor de 4.270.000<br><br><br><br><br>";
        }elseif ($cel == 'Huawei P30'){
            $cel=5280000;
            echo "El celular Huawei P30 tiene un valor de 5.280.000<br><br><br><br><br>";
        }else {
            echo "No añadiste nada a tu carrito<br><br><br><br><br><br><br><br>";
          }
          ?> 

<img src="">
<br>
<?php
//Matriz para sumar

$rel=array($tennis, $consola, $neveras, $cel);
echo '<strong> El valor total es: </strong> <br/><br/>';
echo "Total = $" . array_sum($rel) . "\n <br/><br/>";





if ($rel>5000000){
    echo '<strong> Descuento? </strong> <br/><br/>';
    echo "Obtuviste un descuento del 10% <br>";
}


?> 
    </center>
    <center>

        <br/>
        <br/>
        <!-- Botones ¡-->
        <button onclick="location.href='http://localhost:81/0080_PHP/Productos.php'"> Realizar compra</button> 
        <button onclick="location.href='http://localhost/0080_PHP/Productos.php'"> Volver </button>
    <center>
    </body>
</html>