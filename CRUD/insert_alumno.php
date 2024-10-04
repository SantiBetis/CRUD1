<?php
include("connection.php");
$con = connection();

$nombre = $_POST['nombreAlumnos'];
$edad = $_POST['edad'];

$sql = "INSERT INTO alumnos (nombreAlumnos, edad) VALUES ('$nombre', '$edad')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "Error al insertar el alumno.";
}
?>
