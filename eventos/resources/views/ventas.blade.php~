<html>
  <head>
    <meta charset="utf-8">
    <title>Colores</title>
    <style media="screen">
      table{
        width: 80%;
        margin-left: 10%;
        text-align: center;
      }
      td, th{
        padding: 8px 0;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <th>Id</th>
        <th>No. Boletos</th>
        <th>Empleado</th>
        <th>Evento</th>
      </thead>
      @foreach($ventas as $venta)
          <td>{{ $venta->id }}</td>
          <td>{{ $venta->nboletos }}</td>
          <td>{{ $venta->idempleado }}</td>
          <td>{{ $venta->idboleto }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
