<?php
echo "Detect Pangram<br>";

function detect_pangram($string)
{
    $lettersAppearance = array(
        'A' => 0,
        'B' => 0,
        'C' => 0,
        'D' => 0,
        'E' => 0,
        'F' => 0,
        'G' => 0,
        'H' => 0,
        'I' => 0,
        'J' => 0,
        'K' => 0,
        'L' => 0,
        'M' => 0,
        'N' => 0,
        'O' => 0,
        'P' => 0,
        'Q' => 0,
        'R' => 0,
        'S' => 0,
        'T' => 0,
        'U' => 0,
        'V' => 0,
        'W' => 0,
        'X' => 0,
        'Y' => 0,
        'Z' => 0
    );

    foreach (str_split($string) as $l) {
        $l = strtoupper($l);
        if (isset($lettersAppearance[$l])) {
            $lettersAppearance[$l]++;
        }
    }
    $areAllLettersUsed = true;
    foreach ($lettersAppearance as $key => $value) {
        // echo "Key: " . $key . ", Value: " . $value . "<br>";
        if ($value == 0) $areAllLettersUsed = false;
    }
    return $areAllLettersUsed;
}

$result1 = detect_pangram("The quick brown fox jumps over the lazy dog."); // true
