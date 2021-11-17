<?php

   (int)$calificacion = $_REQUEST['calificacion'];

    if ( $calificacion > 0 && $calificacion< 3){
        echo "Muy deficiente";
    }else if ( $calificacion >= 3 && $calificacion< 5){
        echo "Deficiente";
    }else if ( $calificacion >= 5 && $calificacion< 7){
        echo "Aceptable";
    }else if ( $calificacion >= 7 && $calificacion< 9){
        echo "Sobresaliente";
    }else if ( $calificacion >= 9 && $calificacion<= 10){
        echo "Excelente";
    }else{
        echo "No es una calificación válida";
    }
                                                    
?>