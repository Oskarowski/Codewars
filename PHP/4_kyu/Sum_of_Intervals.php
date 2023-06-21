<?php
echo "<h1> Sum of Intervals </h1> <br>";


function sum_intervals(array $intervals): int
{
    if (empty($intervals)) {
        return 0;
    }

    usort($intervals, function ($a, $b) {
        return $a[0] - $b[0];  // Sort intervals
    });

    $merged = [$intervals[0]];  // Array to store merged intervals

    foreach ($intervals as $interval) {
        $lastMerged = &$merged[count($merged) - 1];  // Get a reference to the last merged interval

        if ($interval[0] <= $lastMerged[1]) {
            // If the current interval overlaps with the previous merged interval, extend the merged interval
            $lastMerged[1] = max($lastMerged[1], $interval[1]);
        } else {
            $merged[] = $interval;
        }
    }

    $totalLength = array_reduce($merged, function ($carry, $interval) {
        return $carry + ($interval[1] - $interval[0]);
    }, 0);

    return $totalLength;
}

// Non-overlapping intervals
echo "<br>";
sum_intervals([[1, 5]]); // = 4
echo "<br>";
sum_intervals([
    [1, 5],
    [6, 10]
]); // = 8
// Overlapping intervals
echo "<br>";
sum_intervals([
    [1, 5],
    [1, 5]
]); // = 4
echo "<br>";
sum_intervals([
    [1, 4],
    [7, 10],
    [3, 5]
]); // = 7
