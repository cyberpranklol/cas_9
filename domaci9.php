<?php

// 1. Napisati fuknciju koja racuna PDV
// Stopa PDV-a iznosi 22%
// Izracunaj PDV(100) -> ispisuje "PDV iznosi 22eur"
// Broj ne moze biti manji od 1

// PROVERA BROJA! BONUS
// Broj mora biti numericka vrednost
// Funkcija ne sme dozvoliti da se ovo desi:
// IzracunajPDV("Toma) -> "Broj mora biti numericka vrednost"


    function izracunajPDV($broj) {
       
        if (!is_numeric($broj)) {
            echo "Broj mora biti numericka vrednost. ";
            return;
        }

        
        if ($broj < 1) {
            echo "Broj ne moze biti manji od 1. ";
            return;
        }

        
        $pdv = $broj * 0.22;

        echo "PDV iznosi $pdv eur. ";
    }

    izracunajPDV(100);

    izracunajPDV("Putin");

    izracunajPDV(0);

?>