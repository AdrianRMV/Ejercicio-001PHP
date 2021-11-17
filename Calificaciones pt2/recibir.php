<?php
    $calificaciones = [];
    $calificaciones = $_POST['calificaciones'];
    $acumulador = 0;

    foreach ($calificaciones as $calificacion) {
        if ($calificacion < 0 || $calificacion > 10) {
            echo '<h1>Error</h1>';
            echo '<p>Calificaciones fuera de rango</p>';
            echo '<a href="index.php">Volver</a>';
            exit;
        } else {
            $acumulador += $calificacion;
        }
    }
    
    $numeroMaterias = sizeof($calificaciones);
    $promedio = $acumulador / $numeroMaterias;
    
    echo "Tu promedio es: $promedio";
