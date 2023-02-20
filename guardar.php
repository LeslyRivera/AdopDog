
<?php           
    if(isset($_POST["submit"])){
        $nombre=$_POST['nombre'];
        $edad=$_POST["edad"];
        $perro=$_POST["nombreperro"];
        $colonia=$_POST["colonia"];
        $ciudad=$_POST["ciudad"];
        $delegacion=$_POST["delegacion"];
        $cp=$_POST["cp"];
        $celular=$_POST["cel"];
        $email=$_POST["email"];
        $img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

        //ini_set('display_errors',E_ALL);
        //Conectar a la BD
        $cnx= mysqli_connect("localhost","root","2021600882","guardF"); 
        //or die ("Error en la conexion a Mysql");

        //comprueba conexion

        if(mysqli_connect_errno()){
        printf("Connect failed: %s\n",mysqli_connect_error());
        exit();
        }
        //echo "conexion exitosa";
        //Insercion de datos
        $res=$cnx->query("INSERT INTO form(nombre,edad,perro,colonia,ciudad,delegacion,
        cp,celular,email,identificacion)".
        "values('$nombre','$edad','$perro','$colonia','$ciudad','$delegacion',
        '$cp','$celular','$email','$img');");
        if($res){
            header("location: ultima.php");
        }else{
            echo "hubo problemas al insertar";
        }
                                           
    } 
?> 
