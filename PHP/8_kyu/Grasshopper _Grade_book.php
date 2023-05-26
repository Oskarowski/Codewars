<?php
function getGrade($a, $b, $c)
{
    $average = ($a + $b + $c) / 3;
    if ($average < 60) return "F";
    if ($average < 70) return "D";
    if ($average < 80) return "C";
    if ($average < 90) return "B";
    if ($average <= 100) return "A";
    return "0";
}
