<html>
 <head>
     <title>productos </title>
 </head>

 <!-- Aqui se encuentra el fondo ¡--> 

<body background="IMG/1.jpg">
<br/>
<br/>
<br/>
<!-- Titulo central dee la pagina ¡-->

    <h1 text align='center'>Productos añadidos al carrito</h1>

        <!-- Se asignan los espacios de respuesta para el registro con su respectivo texto de dialogo, ademas de la especificar accion y el metodo ¡-->

        <p text  align='center'> Por favor escoja los productos que mas le llamaron la atencion con base en su presupuesto </p>
<br><br>
        <form action="TOTAL.php" method="post">
    <center>
        <label >Seccion de Tennis: </label> 

        <select name="tennis">
            <option value = "ninguno">   </option>
            <option value = "Adidas_Yeezi">Adidas_Yeezi</option>
            <option value = "Nike_Jordan">Nike_Jordan</option>
            <option value = "Puma_Califorma">Puma_Califorma</option>
        </select><br/><br/>

        <label > Seccion de Consolas: </label> 

        <select name="consola">
            <option value = "ninguno"></option>
            <option value = "Xbox series x">Xbox series x</option>
            <option value = "Xbox 360">Xbox 360</option>
            <option value = "Xbox One">Xbox One</option>
        </select><br/><br/>

        <label  > Seccion de Neveras: </label>   

        <select name="neveras">
            <option value = "ninguno">   </option>
            <option value = "Challenger">Challenger</option>
            <option value = "LG">LG</option>
            <option value = "Samsung">Samsung</option>
        </select><br/><br/>

    
        <label  > Seccion de Celulares: </label>   

        <select name="cel">
            <option value = "ninguno">   </option>
            <option value = "Xiaomi Redmi note 9s">Xiaomi Redmi note 9s</option>
            <option value = "Iphone 12">Iphone 12</option>
            <option value = "Huawei P30">Huawei P30</option>
        </select><br/><br/>
    <center>

                <!-- Botones para cambiar de pagina ¡-->

            <center> <input  type="submit"  value="Consultar" /></center>
        </form>
    </body>         
</html>        
 
