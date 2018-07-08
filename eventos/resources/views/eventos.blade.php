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
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Costo</th>
        <th>Asiento</th>
      </thead>
      @foreach($boletos as $boleto)
          <td>{{ $boleto->id }}</td>
          <td>{{ $boleto->nombree }}</td>
          <td>{{ $boleto->fechae }}</td>
          <td>{{ $boleto->costoe }}</td>
          <td>{{ $boleto->tipoe }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
