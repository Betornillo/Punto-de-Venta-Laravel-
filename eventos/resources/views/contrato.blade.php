<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Punto de Venta</title>
    <style media="screen">
      form{
        width: 100%;
      }
      input, label{
        display: inline-block;
        width: 60%;
        height: 20px;
        margin-left: 20%
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center">Nueva Venta</h1>
    <form action="/api/empleados" method="post">
      <input type="text" name="nombre" placeholder="Nombre del empleado">
      <input type="date" name="fechaing" placeholder="Fecha de ingreso">
      <label for="activo">Habilitar</label>
      <input type="checkbox" name="activo">
      <input type="integer" name="edad" placeholder="Edad">
      <input type="date" name="fechana" placeholder="Fecha de Nacimiento">
      <button type="submit" name="button">Realizar Venta</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </body>
</html>
