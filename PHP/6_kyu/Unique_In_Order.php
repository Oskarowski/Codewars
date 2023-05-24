<?php
echo "Unique In Order <br>";

function uniqueInOrder($iterable)
{
    if (empty($iterable)) return [];

    $uniqueArray = [];
    $typeOfInput = gettype($iterable);
    $arr = null;
    switch ($typeOfInput) {
        case 'string':
            $arr = str_split($iterable);
            break;
        case 'array':
            $arr = $iterable;
            break;
        default:
            return $uniqueArray;
    }
    $sizeOfInput = count($arr);
    for ($i = 0; $i < $sizeOfInput; $i++) {
        if ($i == 0 || $arr[$i] !== $arr[$i - 1]) {
            $uniqueArray[] = $arr[$i];
        }
    }
    return $uniqueArray;
}

$case1 = uniqueInOrder("AAAABBBCCDAABBB"); // == {'A', 'B', 'C', 'D', 'A', 'B'}
$case2 = uniqueInOrder("ABBCcAD"); // == {'A', 'B', 'C', 'c', 'A', 'D'}
// $case3 = uniqueInOrder([1, 2, 2, 3, 3]); // == {1,2,3}
$case4 = uniqueInOrder("AABBCC"); // == {A,B,C}

var_dump($case1);
echo "<br>";
print_r($case2);
echo "<br>";
print_r($case4);
echo "<br>";
