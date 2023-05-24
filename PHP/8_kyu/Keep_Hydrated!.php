<?php
echo "Keep Hydrated!<br>";

function litres(float $t): int
{
    $liters = $t / 2;
    $liters = floor($liters);
    echo "$liters <br>";
    return (int)$liters;
}



litres(2); // 1, 
litres(1.4); // 0, 
litres(12.3); // 6, 
litres(0.82); // 0, 
litres(11.8); // 5, 
litres(1787); // 893
litres(0); // 0, 