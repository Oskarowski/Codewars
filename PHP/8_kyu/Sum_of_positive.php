<?php 
echo "Sum of positive <br>";

function positive_sum($arr) {
    if(count($arr) == 0 ) return 0;

    $sum = 0;
    
    foreach($arr as $number){
        if( $number > 0 ) $sum += $number;
    }

    return $sum;
  }


$fun1 = positive_sum([1, -2, 3, 4, 5]);
$fun2 = positive_sum([1, 2, 3, 4, 5]);
$fun3 = positive_sum([]);
$fun4 = positive_sum([-1, -2, -3, -4, -5]);
$fun5 = positive_sum([-1, 2, 3, 4, -5]);


?>