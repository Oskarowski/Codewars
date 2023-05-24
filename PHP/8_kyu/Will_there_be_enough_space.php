<?php 
    echo"Will there be enough space? <br><br>";
    
    function enough($cap, $on, $wait) {
            echo"cap:{$cap}, on:{$on}, wait:{$wait}<br>";
            $freeSpace = $cap - $on;
            echo"freeSpace:{$freeSpace}";
            return $freeSpace >= $wait ? 0 : $wait-$freeSpace;
    }




    $case1 = enough(20, 5, 5);
    $case2 = enough(10, 5, 5);
    $case3 = enough(100, 60, 50);
    echo"<br> case1:{$case1}, case2:{$case2}, case3:{$case3} <br>";









?>