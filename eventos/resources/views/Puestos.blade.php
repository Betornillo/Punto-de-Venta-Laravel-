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
    <h1 style="text-align: center">Posiciones en la empresa</h1>
    <form action="/api/puestos" method="post">
      <input type="integer" name="sueldo" placeholder="Sueldo">
      <input type="text" name="nombrep" placeholder="Nombre del puesto">
      <input type="integer" name="idempleado" placeholder="Empleado">
      <button type="submit" name="button">Realizar Promoción</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </body>
</html>
