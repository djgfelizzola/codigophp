<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<center>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div class="card">
        <div class="card-body">
            FORMULARIO
        </div>
        </div>
    </li>
    <form method="post" action="conexion.php" >
    <li class="list-group-item">
            <div class="form-group">
            <label for="exampleInputEmail1">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre...">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp" placeholder="Apellido...">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo:</label>
            <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo...">
        </div>
        <br>
    </li>
    <li class="list-group-item">
    <button type="submit" class="btn btn-primary">Crear</button>
    </li>
    </form>
  </ul>

</div>
</center>
    </html>
