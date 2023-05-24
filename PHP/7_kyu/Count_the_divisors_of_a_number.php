<?php
echo "Count the divisors of a number <br>";

function divisors($n)
{
    echo "<br>";
    $divisors = array();
    for ($i = $n; $i > 0; $i--) {
        if ($n % $i == 0) {
            // array_keys($divisors, $i);
            array_push($divisors, $i);
            // $divisors[] = $i;
        }
    }
    print_r($divisors);
    return count($divisors);
}

// $case1 = divisors(1);  // 1 
// $case1 = divisors(4);  // 3 
// $case1 = divisors(10); // 4 
// $case1 = divisors(11); // 2 
// $case1 = divisors(12); // 6 
// $case1 = divisors(54); // 8 
// $case1 = divisors(64); // 7 