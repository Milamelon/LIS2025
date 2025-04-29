<!-- filepath: c:\xampp\htdocs\PN211471-LIS-2025\Desafio2\Views\Ventas.php\ventas.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= PATH ?>/Usuarios/panel">Panel de Administración</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Menú desplegable -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php if ($_SESSION['rol'] == 'administrador'): ?>
                                <li><a class="dropdown-item" href="<?= PATH ?>/Categorias/index">Categorías</a></li>
                                <li><a class="dropdown-item" href="<?= PATH ?>/Usuarios/index">Usuarios</a></li>
                                <li><a class="dropdown-item" href="<?= PATH ?>/Clientes/index">Clientes</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="<?= PATH ?>/Productos/index">Productos</a></li>
                            <li><a class="dropdown-item" href="<?= PATH ?>/Ventas/index">Ventas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="#"><?= $_SESSION['rol'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="<?= PATH ?>/Usuarios/logout">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Ventas</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Código de Venta</th>
                    <th>Código de Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($ventas)): ?>
                    <?php foreach ($ventas as $venta): ?>
                        <tr>
                            <td><?= htmlspecialchars($venta['codigo_ventas']); ?></td>
                            <td><?= htmlspecialchars($venta['codigo_cliente']); ?></td>
                            <td><?= htmlspecialchars($venta['fecha']); ?></td>
                            <td>$<?= number_format($venta['total'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No hay ventas registradas.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>