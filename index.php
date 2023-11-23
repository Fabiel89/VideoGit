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
if ($resultado -> num_rows){ //si la consulta genera registros
          echo '<div style="margin-left: 20px;">';
          echo '<table class="table table-hover" style="width:50%;">';
          
            echo '<tr>';
                echo '<th>id</th>';
                echo '<th>nombre</th>';
                echo '<th>cuenta</th>';
                echo '<th>contrasena</th>';
            echo '</tr>';
            while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                echo '<tr>';
                    echo '<td>'. $fila['id'] . '</td>';
                    echo '<td>'. $fila['nombre'] . '</td>';
                    echo '<td>'. $fila['cuenta'] . '</td>';
                    echo '<td>'. $fila['contrasena'] . '</td>';
                echo '</tr>';
            }   
            echo '</table">';
         echo '</div>';
     }
     else{
         echo "no hay datos";
     }
    
   
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
    <div class="container">
    <div class="table-container">
    <table class="table">
    </div>
        <div class="row">
            <div class="row">
                <div class="col-4">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
                        <h2>Registro de Usuarios</h2>
                        <div class="form-group">
                            <p id="reloj"></p>
                        </div>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="id">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="cuenta">Cuenta</label>
                            <input type="text" id="cuenta" name="cuenta" class="form-control" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="contra">Contrasena</label>
                            <input name="contra" type="text" class="form-control" id="contra" placeholder="">
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                    </form>
                </div> <!-- fin col -->
            </div> <!-- fin row -->
        </div> <!-- fin container -->
 
    </table>
    </div>
    <br><br>
</body>
</html>
