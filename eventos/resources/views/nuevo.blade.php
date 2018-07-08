<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nuevo Evento</title>
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
    <h1 style="text-align: center">Añadir Evento</h1>
    <form action="/api/boletos" method="post">
      <input type="text" name="nombree" placeholder="Nombre del evento">
      <input type="date" name="fechae" placeholder="Fecha del evento">
      <input type="double" name="costoe" placeholder="Costo">
      <input type="text" name="tipoe" placeholder="Asientos">
      
      <button type="submit" name="button">Guardar Evento</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </body>
</html>
