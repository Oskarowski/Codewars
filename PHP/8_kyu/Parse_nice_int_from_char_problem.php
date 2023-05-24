<?php
echo "Parse nice int from char problem <br>";

function getAge($response)
{
    // return correct age (int). Happy coding :) 

    $pattern = '/^\d/';
    if (preg_match($pattern, $response, $matches)) {
        return intval($matches[0]);
        // return int($matches[0]);
    }
}

getAge("3 years old"); // int 3
