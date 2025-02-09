<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tarea = $_POST['tarea'];
    $investigacion = $_POST['investigacion'];
    $examen = $_POST['examen'];

    if (file_exists('notas.xml')) {
        $xml = simplexml_load_file('notas.xml');
    } else {
        $xml = new SimpleXMLElement('<notas></notas>');
    }

    $alumno = $xml->addChild('alumno');
    $alumno->addChild('nombre', $nombre);
    $alumno->addChild('tarea', $tarea);
    $alumno->addChild('investigacion', $investigacion);
    $alumno->addChild('examen', $examen);

    $xml->asXML('notas.xml');
    header('location:promnotas.php');
}
$notas = [];
if (file_exists('notas.xml')) {
    $xml = simplexml_load_file('notas.xml');
    foreach ($xml->alumno as $alumno) {
        $notas[(string)$alumno->nombre] = [
            'tarea' => $alumno->tarea,
            'investigacion' => $alumno->investigacion,
            'examen' => $alumno->examen
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <title>Ingreso de Notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .custom-table {
            margin-top: 20px;
            border: 3px solid #a7e3db;
        }
        .custom-table th, .custom-table td {
            border:3px solid #a7e3db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ingreso de Notas</h2>
        <form action="promnotas.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Alumno:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="tarea">Nota Tarea</label>
                <input type="number" class="form-control" id="tarea" name="tarea" min="1" max="10" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="investigacion">Nota Investigación</label>
                <input type="number" class="form-control" id="investigacion" min="1" max="10" step="0.1" name="investigacion" required>
            </div>
            <div class="form-group">
                <label for="examen">Nota Examen Parcial</label>
                <input type="number" class="form-control" id="examen" min="1" max="10" step="0.1" name="examen" required>
            </div>
            <button type="submit" class="btn btn-outline-info">Calcular Promedio</button>
        </form>

        <h2 class="mt-5">Notas Ingresadas Con Su Promedio</h2>
        <p class="mt-5">Porcentaje de cada nota: Tarea(20%), Investigación(30%) y Examen(20%)</p>
        <table class="table table-bordered custom-table " style="text-align: center;">
            <thead class="table-info">
                <tr>
                    <th>Nombre Alumno</th>
                    <th>Tarea</th>
                    <th>Investigación</th>
                    <th>Examen</th>
                    <th>Promedio Notas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($notas as $nombre => $nota) {
                    $promedio = ($nota['tarea'] * 0.5) + ($nota['investigacion'] * 0.3) + ($nota['examen'] * 0.2);
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($nombre) . '</td>';
                    echo '<td>' . htmlspecialchars($nota['tarea']) . '</td>';
                    echo '<td>' . htmlspecialchars($nota['investigacion']) . '</td>';
                    echo '<td>' . htmlspecialchars($nota['examen']) . '</td>';
                    echo '<td>' . htmlspecialchars($promedio) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>