<?php
$servidor='localhost';
$cuenta='root';
$password='';
$bd='bdprueba1';
 
$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
     die('Error en la conexion');
}

else{

     if(isset($_POST['submit'])&& !empty($_POST['id'])){
            //obtenemos datos del formulario
            $id = $_POST['id'];
            $nom =$_POST['nombre'];
            $cuenta =$_POST['cuenta'];
            $pass =$_POST['contra'];
            
            $sql = "INSERT INTO usuarios (id, nombre, cuenta, contrasena) VALUES('$id','$nom','$cuenta','$pass')";
            $conexion->query($sql);  
            if ($conexion->affected_rows >= 1){ 
                echo '<script> alert("registro insertado") </script>';
            }//fin
         
         
     $sql = 'select * from usuarios';
     $resultado = $conexion -> query($sql); //aplicamos sentencia

     
    
     }//fin 

    
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
       

    </script>
</head>
<body>
    <h1> Un Cambio </h1>
</body>
</html>