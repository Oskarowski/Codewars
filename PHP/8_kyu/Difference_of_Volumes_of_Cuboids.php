<?php 
    echo"Difference of Volumes of Cuboids <br><br>";

    function findDifference($a, $b) {
        echo"<br>";
        $volume1 = 1;
        foreach($a as $d){
            $volume1 *= $d;
            echo" {$d} ";
        }
        echo"<br> \$volume1 = $volume1";
        echo"<br> ";

        $volume2 = 1;
        foreach($b as $d){
            $volume2 *= $d;
            echo" {$d} ";
        }
        echo"<br> \$volume2 = $volume2";
        $difference = abs($volume1 - $volume2);

        echo"<br> \$difference = $difference <br>";
        return $difference;
    }



    $case0 = findDifference([2, 2, 3], [5, 4, 1]);
    $case1 = findDifference([3, 2, 5], [1, 4, 4]);
    $case2 = findDifference([9, 7, 2], [5, 2, 2]);
    $case3 = findDifference([11, 2, 5], [1, 10, 8]);
    $case4 = findDifference([4, 4, 7], [3, 9, 3]);
    $case5 = findDifference([15, 20, 25], [10, 30, 25]);

    // array_product(...)
?>