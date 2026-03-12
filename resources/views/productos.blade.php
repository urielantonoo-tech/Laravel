<!DOCTYPE html>
<html>
<head>

<title>Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h1 class="mb-4">Lista de Productos</h1>

<ul class="list-group mb-4">
@foreach ($productos as $producto)
    <li class="list-group-item">{{ $producto }}</li>
@endforeach
</ul>

<h3>Agregar producto</h3>

<form method="POST" action="/productos" class="row g-3">
@csrf

<div class="col-auto">
<input type="text" name="producto" class="form-control" placeholder="Nombre del producto">
</div>

<div class="col-auto">
<button type="submit" class="btn btn-primary">Agregar</button>
</div>

</form>

</div>

</body>
</html>