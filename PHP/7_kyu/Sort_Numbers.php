<?php
echo "Sort Numbers<br>";


function solution($nums)
{
    if ($nums == null || count($nums) == 0) return [];
    print_r($nums);
    echo "<br>";
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = 0; $j < count($nums) - $i - 1; $j++) {
            if ($nums[$j] > $nums[$j + 1]) {
                $smaller = $nums[$j + 1];
                $nums[$j + 1] = $nums[$j];
                $nums[$j] = $smaller;
            }
        }
    }
    print_r($nums);
    echo "<br>";
    return $nums;
}


solution([1, 2, 10, 50, 5]);    // [1, 2, 5, 10, 50]);
solution(null);                 // []);
solution([]);                   // []);


/*
function solution($nums) {
  ($nums == null) ? $nums = [] : sort($nums);
  return $nums;
}
*/