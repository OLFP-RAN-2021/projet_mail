<?php

declare(strict_types=1);



try {
    $dollar = (random_int(0, 20));
    
    if ($dollar < 10) {

        
        throw new Exception("le nombre est inférieur à 10");
    }
    
} catch (Exception $e) {
    
    
    echo $e->getMessage();
}
echo "<br>".$dollar;

