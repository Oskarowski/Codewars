<?php
echo "Digit*Digit <br>";

function square_digits($num): int
{
    $split = str_split($num);
    $split = array_map(function ($e) {
        return $e * $e;
    }, $split);
    $split = implode("", $split);
    echo "<br> $split <br>";
    return $split;
}

square_digits(9119);    // 811181
square_digits(24680);   // 41636640
square_digits(13579);   // 19254981
square_digits(0);       // 0



/*
return implode(array_map(function($n){
        return $n*$n;
    },str_split($num)))+0;
  */