<?php
echo "Replace With Alphabet Position <br>";



function alphabet_position(string $s): string
{
    if (empty($s)) return "";
    $s = mb_strtoupper($s);
    $letters = str_split(preg_replace("/[^A-Za-z]/", "", $s));

    $alphabet = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'L' => 12,
        'M' => 13,
        'N' => 14,
        'O' => 15,
        'P' => 16,
        'Q' => 17,
        'R' => 18,
        'S' => 19,
        'T' => 20,
        'U' => 21,
        'V' => 22,
        'W' => 23,
        'X' => 24,
        'Y' => 25,
        'Z' => 26
    ];

    $letters = array_map(function ($e) use ($alphabet) {
        if (isset($alphabet[$e])) {
            return strval($alphabet[$e]);
        }
        return '';
    }, $letters);
    $order = (implode(" ", $letters));

    return $order;
}


$case1 = alphabet_position('The sunset sets at twelve o\' clock.'); //   ('20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11'
$case2 = alphabet_position('The narwhal bacons at midnight.'); //        ('20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20'

echo "<br> $case1 <br>";
echo "$case2";


// array_flip();