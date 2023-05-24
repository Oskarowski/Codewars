<?php 
echo"Josephus Permutation<br>";

function josephus(array $items, int $k): array {
    $n = count($items);
    $toReturn = [];
    $currentIndex = 0;

    while ($n > 0) {
        echo"<br> \$n: $n " . ($currentIndex + $k - 1) . "__";
        print_r($items);
        $currentIndex = ($currentIndex + $k - 1) % $n;
        $toReturn[] = $items[$currentIndex];
        array_splice($items, $currentIndex, 1);
        $n--;
    }

    return $toReturn;
}

print_r(josephus([1,2,3,4,5,6,7], 3));

//   [1,2,3,4,5,6,7] - initial sequence
//   [1,2,4,5,6,7] => 3 is counted out and goes into the result [3]
//   [1,2,4,5,7] => 6 is counted out and goes into the result [3,6]
//   [1,4,5,7] => 2 is counted out and goes into the result [3,6,2]
//   [1,4,5] => 7 is counted out and goes into the result [3,6,2,7]
//   [1,4] => 5 is counted out and goes into the result [3,6,2,7,5]
//   [4] => 1 is counted out and goes into the result [3,6,2,7,5,1]
//   [] => 4 is counted out and goes into the result [3,6,2,7,5,1,4]






//print_r();
?>