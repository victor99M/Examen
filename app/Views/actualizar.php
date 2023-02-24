<?php
$id=$datos[0]['id'];
$nombre = $datos[0]['first_name'];
$apellido = $datos[0]['last_name'];
$direccion = $datos[0]['address'];

?>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
</head>

<body>
    <div class="container">
        <h1>Tabla de usuarios</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url() . '/actualizar' ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" 
                    value="<?php echo $nombre?>">

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="nombre" class="form-control"
                    value="<?php echo $apellido?>">

                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="nombre" class="form-control"
                    value="<?php echo $direccion?>">
                    <input type="hidden" name="id" 
                    value="<?php echo $id?>" >
                    <br>
                    
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
