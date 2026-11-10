<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos - PostgreSQL</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Catálogo de Productos (PostgreSQL)</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Fecha de creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>${{ number_format($producto->precio, 2) }}</td>
                            <td>
                                <span class="badge {{ $producto->stock > 0 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $producto->stock }} unidades
                                </span>
                            </td>
                            <td>{{ $producto->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <a href="/productos/prueba" class="btn btn-outline-primary">Añadir otro producto de prueba</a>
        </div>
    </div>
</body>
</html>