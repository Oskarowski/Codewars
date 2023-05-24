<?php
echo "Factorial <br>";


function factorial(int $n): int
{
    if ($n > 12 || $n < 0) {
        throw new RangeException("RangeException");
    }
    $result = 1;
    for ($i = $n; $i > 0; $i--) {
        $result *= $i;
    }
    return $result;
}
$case1 = factorial(0); // '0! should equal 1');
$case2 = factorial(1); // '1! should equal 1');
$case3 = factorial(2); // '2! should equal 2');
$case4 = factorial(3); // '3! should equal 6');
$case5 = factorial(5); // '3! should equal 120');

echo "$case1 <br>";
echo "$case2 <br>";
echo "$case3 <br>";
echo "$case4 <br>";
echo "$case5 <br>";
