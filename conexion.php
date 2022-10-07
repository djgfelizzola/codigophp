<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<center>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">

<?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["correo"];

$servername = "localhost";
$database = "linux";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO linux (nombre, apellido, correo) VALUES ('".$nombre."', '".$apellido."', '".$correo."')";
if (mysqli_query($conn, $sql)) {
      echo "<li class='list-group-item'>
      <div class='alert alert-success' role='alert'>
      Registro creado :)
    </div>
    </li>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<li class="list-group-item">
<a class="btn btn-primary" href="formulario.php">Regresar</a>
</li>

</ul>
</div>
</center>
</html>
