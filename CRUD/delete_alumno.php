<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM alumnos WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "Error al borrar el alumno.";
}
?>
