<?php

    // $broj ili $broj2 - ne sme biti 0!    
    function izracunaj($broj1, $broj2) {
        $rezultat = $broj1 + $broj2;
        if($broj1 == 0 || $broj2 == 0){
            die("Brojevi ne smeju biti nula");
        }
        echo $rezultat;
    }

    izracunaj(0,5);