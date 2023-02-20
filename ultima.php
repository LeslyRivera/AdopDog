<?php
    //Conectar a la BD
    $cnx= mysqli_connect("localhost","root","2021600882","guardF") 
    or die ("Error en la conexion a Mysql");

    //comprueba conexion
    if(mysqli_connect_errno()){
    printf("Connect failed: %s\n",mysqli_connect_error());
    exit();
    }
    //echo "conexion exitosa";
    
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="css/inicio.css" rel="stylesheet" type="text/css">    
</head>
<body>
    <table border="0px" width="100%" height="100%">
        <div class="div1">
        </div>
        <tr class="tr1" >
            <td>
                <img src="css/logo.png" height="30px">
                <span>AdopDog</span>
            </td>
            <td>
                ¡¡TU REGISTRO ESTA LISTO!!
            </td>
            <td>
            <a href="inicio.html"> Si deseas regresar a la página, da click aquí: <b> Inicio </b></a>
            </td>
        </tr>
    </table>
    <table border="0px" width="100%" height="100%">
        <tr>
            <td width="30%">
                <div class=ult1>
                    <?php 
                    //recuperar registros de la BD
                    $res=mysqli_query($cnx,"SELECT * from form order by id desc limit 1 ;");
                    while($registro=mysqli_fetch_row($res)){
                            echo("<h3> &#128054; Gracias por tu solicitud $registro[1]!! </h3>
                            </br><p>Los datos registrados son:</p>
                            <p>Edad:$registro[2]</p>
                            <p>Nombre del perro a adoptar:$registro[3]</p>
                            <p>Colonia:$registro[4]</p>
                            <p>Ciudad:$registro[5]</p>
                            <p>Delegación:$registro[6]</p>
                            <p>C.P:$registro[7]</p>
                            <p>Número de celular:$registro[8]</p>
                            <p>Email:$registro[9]</p>
                            </br>
                            <h3>El albergue se pondrá en contacto contigo durante la semana</h3>");       
                    }

                    //libera objetos de datos empleados
                    mysqli_free_result($res);
                    mysqli_close($cnx);
                    ?>
                </div>
            </td>
            <td width="30%" align="center">
                </br>
                <img src="css/guinio.jpg" alt="" height="450px"/>
            </td>
        </tr>
    </table>
</html>