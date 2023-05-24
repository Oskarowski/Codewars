<?php 
echo"Grasshopper - Summation <br>";

function summation($n) {
    $sum = 0;
    for( $i = $n; $i > 0; $i-- ){
        $sum += $i;
    }
    echo"<br> $sum <br>";
    return $sum;
    //array_sum(range(1, $n));
}


$case1 = summation(1); // 1);
$case2 = summation(2); // 3);
$case3 = summation(3); // 6);
$case4 = summation(4); // 10);
$case5 = summation(5); // 15);

?>