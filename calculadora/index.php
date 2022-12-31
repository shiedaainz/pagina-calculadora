<!DOCTYPE html>
<!--
juan camilo castillo sanchez desarrollo web en php uso de funciones
la creacion de un form tambien aplicando un poco del paradigma del POO
utilizando clases como tal la de biblioteca.php donde esta la funcion que 
requeria el trabajo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>taller 3</title>
        <link href="css.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>calculadora</h1>
            <form name = "formulario" method="post">
                <label>numero 1: </label> <input type=numeric name ="n1"/>
                <br/>
                <label>numero 2: </label> <input type=numeric name ="n2"/>
                <br/>
                <label>operacion : </label> <input type="text" name ="op"/>
                <br/>
                <input type="submit" name="enviar" value="calculo">
            </form>
        </div>
        <div>
        <?php
            include './biblioteca.php';
        ?>
        </div>
    </body>
</html>
