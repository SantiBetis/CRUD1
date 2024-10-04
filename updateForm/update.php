<?php
include("../CRUD/connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Editar Alumno</h1>
        <form action="../CRUD/edit_alumno.php" method="POST">
            <input type="hidden" name="idAlumnos" value="<?= $row['idAlumnos'] ?>">
            <div class="form-group">
                <label for="nombreAlumnos">Nombre</label>
                <input type="text" class="form-control" name="nombreAlumnos" value="<?= $row['nombreAlumnos'] ?>" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" name="edad" value="<?= $row['edad'] ?>">
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="Actualizar">
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
