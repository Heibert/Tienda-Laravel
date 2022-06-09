<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css') }}"/>
    <title>Tienda PHP</title>
</head>
<body>
<nav class="#29b6f6 light-blue lighten-1">
    <div class="nav-wrapper">
      <a href="/productos" class="brand-logo">La Tienda PHP</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/productos">Catalogo</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="/productos/create">Registrar</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
      @yield('contenido')
  </div>
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, []);
    });
  </script>
</body>
</html> 