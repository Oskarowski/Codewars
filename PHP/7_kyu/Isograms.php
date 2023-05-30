<?php
echo "Isograms <br>";

function isIsogram($string)
{
    $string = mb_strtolower($string);
    foreach (str_split($string) as $l) {
        if (strpos($string, $l) != strrpos($string, $l)) {
            return false;
        }
    }
    return true;
}

isIsogram("Dermatoglyphics"); // (true, );
isIsogram("isogram"); // (true, );
isIsogram("aba"); // (false,);
isIsogram("moOse"); // (false,);
isIsogram("isIsogram"); // (false,);
isIsogram("");// (true, );


//strpos Find the position of the first occurrence of a substring in a string

// strrpos Find the position of the last occurrence of a substring in a string