<?php
include("connection.php");
$con = connection();

$id = $_POST['idAlumnos'];
$nombre = $_POST['nombreAlumnos'];
$edad = $_POST['edad'];

$sql = "UPDATE alumnos SET nombreAlumnos='$nombre', edad='$edad' WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "Error al actualizar el alumno.";
}
?>
