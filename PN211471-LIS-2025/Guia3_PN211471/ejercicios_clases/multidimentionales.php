<?php
$alumnos=[
    [
        'nombre'=> 'Mila',
        'apellido'=>'Nava',
        'carnet'=>'PN211471',
        'CUM'=>9.5,
        'materias'=>['LIS104','APN501','EYM501']
    ],
    [
        'nombre'=> 'Danna',
        'apellido'=>'Guti',
        'carnet'=>'GL210850',
        'CUM'=>9.5,
        'materias'=>['LIS104','APN501','EYM501']
    ],
    [
        'nombre'=> 'Maria',
        'apellido'=>'Sa',
        'carnet'=>'SH031574',
        'CUM'=>9.5,
        'materias'=>['LIS104','APN501','EYM501']
    ]
    ];
    ?>
    <table border="1">
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Carnet</th>
          <th>?CUM?</th>
          <th>Materias inscritas</th>
        </tr>  

        <?php
        foreach ($alumnos as $alumno) {
            ?>

        <tr>
            <td><?=$alumno['nombre'] ?></td>
            <td><?=$alumno['apellido'] ?></td>
            <td><?=$alumno['carnet'] ?></td>
            <td><?=$alumno['CUM'] ?></td>
            <td><?=implode(', ',$alumno['materias'],)?></td>
        </tr>
        <?php } ?>
    </table> 