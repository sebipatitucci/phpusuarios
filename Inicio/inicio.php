<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <form action="validar.php" method="GET">
    <div class="carta">
        <h2>Inicio sesion</h2>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="" class="form-control">
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="" class="form-control">
        <label for="">Cargo</label>
        <select name="cargo" id="" class="form-select">
            <option value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
            <option value="invitado">Invitado</option>
        </select>
        <button type="submit">Enviar</button><br>
    </div>
    </form>
</body>
</html>