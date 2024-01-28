<?php

class Resultado{
    // Inicializar los puntos de los equipos

    public static function simularResultado(){
        $equipoA_puntos = 0;
        $equipoB_puntos = 0;
        
        $incremento_equipoA = rand(0, 5);
        $incremento_equipoB = rand(0, 5);
        
        // Asignamos probabilidades a cada resultado
        if ($incremento_equipoA <= 30) {
            $incremento_equipoA = 0;
        } elseif ($incremento_equipoA <= 40) {
            $incremento_equipoA = 1;
        } elseif ($incremento_equipoA <= 20) {
            $incremento_equipoA = 2;
        } elseif ($incremento_equipoA <= 12) {
            $incremento_equipoA = 3;
        } elseif ($incremento_equipoA <= 6) {
            $incremento_equipoA = 4;
        } elseif ($incremento_equipoA <= 4) {
            $incremento_equipoA = 5;
        }
        
        // Repetimos el proceso para $incremento_equipoB
        if ($incremento_equipoB <= 30) {
            $incremento_equipoB = 0;
        } elseif ($incremento_equipoB <= 40) {
            $incremento_equipoB = 1;
        } elseif ($incremento_equipoB <= 20) {
            $incremento_equipoB = 2;
        } elseif ($incremento_equipoB <= 12) {
            $incremento_equipoB = 3;
        } elseif ($incremento_equipoB <= 6) {
            $incremento_equipoB = 4;
        } elseif ($incremento_equipoB <= 4) {
            $incremento_equipoB = 5;
        }
        
            // Aumentar los puntos de los equipos
            $equipoA_puntos += $incremento_equipoA;
            $equipoB_puntos += $incremento_equipoB;
        
            // Mostrar los puntos de los equipos
            echo "Puntos del Equipo A: " . $equipoA_puntos . "<br>";
            echo "Puntos del Equipo B: " . $equipoB_puntos . "<br>";

        $resultadoString ="El resultado ha sido:" . $equipoA_puntos . "-" . $equipoB_puntos;
        echo $resultadoString;
    }

}

?>
