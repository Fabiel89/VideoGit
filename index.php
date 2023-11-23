<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Parte Ricardo -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
                    <h2>Registro de Usuarios</h2>
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
    <br><br>
    <!-- FIN PARTE DE RICARDO -->
</body>
</html>