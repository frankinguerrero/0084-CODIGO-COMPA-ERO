<html>
 <head>
     <title>Ventas online </title>
 </head>

 <!-- Aqui se encuentra el fondo ¡--> 

<body background="IMG/1.jpg">
<br/>
<br/>
<br/>
<!-- Titulo central dee la pagina ¡-->

    <h1 text align='center'>Datos para la compra</h1>

        <!-- Se asignan los espacios de respuesta para el registro con su respectivo texto de dialogo, ademas de la especificar accion y el metodo ¡-->

        <form action="base.php" method="post">

            <p text  align='center'> Nombre:  <input type="text" name="Nombre" /></p>
            <p text  align='center'> Apellido: <input type="text" name="Apellido" /></p>
            <center>
<!--Se hace el uso de la etiqueta label para formar una lista ,para facilitar al usuario en diligenciar las opciones-->
<label for"">Tipo de documento:</label>
<select name="CC_TI">
<option  value=""></option>
<option  value="TI">Tarjeta de identidad</option>
<option  value="Cedula">Cedula</option>
</select>
</center>
<p text  align='center'> Documento: <input type="text" name="Documento" /></p>
<center><label for"">Tarjeta:</label>
<select name="Tarjeta">
<option  value=""></option>
<option  value="Visa">Visa</option>
<option  value="BBVA">BBVA</option>
<option  value="Bancolombia">Bancolombia</option>
<option  value="Davivienda">Davivienda</option>
</select>
</center>
<p text  align='center'> Telefono <input type="text" name="Telefono" /></p>

                <!-- Botones para cambiar de pagina ¡-->

            <center> <input  type="submit"  value="Enviar" /></center>
        </form>
    </body>         
</html>        
  

  
  
  