<?php
include "./config/db.php";
$data = mysqli_query($conn, 'SELECT * FROM producto');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <a name="" id="" class="btn btn-primary" href="#" role="button">Agregar</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key) { ?>
                    <tr>
                        <td><?php echo $key['nombre'] ?></td>
                        <td><?php echo $key['precio'] ?></td>
                        <td><?php echo $key['id_fabricante'] ?></td>
                        <td><a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>