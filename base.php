<html>
    <head> 
        
    <head>
        <!-- Aqui se encuentra el fondo ¡--> 
    <body background="IMG/1.jpg">

    </body>            
</html>    
<center>
<?php 

// se les da un valor a las variables

$Nombre = $_POST ["Nombre"];
$Apellido= $_POST ["Apellido"];
$CC_TI= $_POST ["CC_TI"];
$Documento= $_POST ["Documento"];
$Tarjeta= $_POST ["Tarjeta"];
$Telefono= $_POST ["Telefono"];
?>
<?php 
//Condicional que avisa al usuario si debe comprar con la supervision de un adulto o no, esto dependiendo de la edad

if ($CC_TI == 'Cedula'){
    //se imprimen las variables
    echo "<h1 text align='center'>Verifica tus datos</h1>Nombre: " . $Nombre . "<br/>";
    echo "Apellido:  ". $Apellido . "<br/>";
    echo "CC_TI:  ". $CC_TI . "<br/>";
    echo "Documento:  ". $Documento . "<br/>";
    echo "Tarjeta:  ". $Tarjeta . "<br/>"; 
    echo "Telefono: " . $Telefono . "<br/><br/>"; 
    //Le indica al usuaario que hacer dependiendo de los datos vistos
    echo "<div><h1>Condiciones</h1>Si su informacion  es correcta dele clic en Ir al carrito <br>";
    echo "por el contrario dele en regresar <br><br/> <br/><br/> <br/><br/><br/>";
    echo "<img src='https://vendedores.mercadolibre.com.co/wp-content/uploads/sites/3/2020/07/201030_ML_Carrito-compras_Icono1.svg'> <br>";
    echo ' <a href="http://localhost/0080_PHP/Productos.php">Ir al carrito</a> <br>';
    echo '<br> <a href="http://localhost/0080_PHP/HOME/Home.php">Salir </a>';


}elseif ($CC_TI == 'TI'){
echo "<div><h1>Atencion</h1>";
echo "<img src='data:image/jpeg;base64,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'> <br>";
echo "<br>Usted no puede hacer nigun tipo de compra debido a su edad <br/> <br/>";
echo "<br> <br> <br><br> <br> <br><br> <br> <br>Dele click en Salir para dirigirlo a la pagina principal";
echo '<br><a href="http://localhost/0080_PHP/HOME/Home.php">Salir</a>';
}
?>
<?php 

?>




