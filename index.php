<?php
include("CRUD/connection.php");
$con = connection();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="santiago.perez@a.vedrunasevillasj.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Thurday, October 3rd, 2024, 16:45pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    <!-- My scripts -->
    <!-- <script type="text/javascript" src="js/app.js" defer></script> -->

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>CRUD Projects </title>

</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Listado de Alumnos</h1>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['idAlumnos'] ?></td>
                    <td><?= $row['nombreAlumnos'] ?></td>
                    <td><?= $row['edad'] ?></td>
                    <td>
                        <a href="updateForm/update.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-secondary">Editar</a>
                        <a href="CRUD/delete_alumno.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2 class="text-center mt-4">Insertar Nuevo Alumno</h2>
        <form action="CRUD/insert_alumno.php" method="POST">
            <div class="form-group">
                <label for="nombreAlumnos">Nombre</label>
                <input type="text" class="form-control" id="nombreAlumnos" name="nombreAlumnos" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="Insertar">
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>