<?php
function race($v1, $v2, $g)
{
    if ($v1 >= $v2) return null;
    $time = $g / ($v2 - $v1);
    $time = $time * 3600;
    $hours = floor($time / 3600);
    $minutes = floor(($time - ($hours * 3600)) / 60);
    $seconds = floor($time % 60);
    return [$hours, $minutes, $seconds];
    // return explode(':', gmdate("H:i:s", floor($time * 3600)));
}


race(720, 850, 70); // [0, 32, 18]
race(80, 91, 37); // [3, 21, 49]
race(80, 100, 40); //[2, 0, 0], 