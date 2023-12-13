<?php

    function parnost($broj) {
        if ($broj === 0) {
            echo "Broj 0 se ne moze proslediti kao argument. ";
        } elseif ($broj % 2 == 0) {
            echo "$broj broj je paran. ";
        } else {
            echo "$broj broj je neparan. ";
        }
    }

    parnost(22);
    parnost(33);
    parnost(0);

?>