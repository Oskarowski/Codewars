<?php
echo "Consecutive strings<br>";

function longestConsec($strarr, $k)
{
    if (empty($strarr) || $k <= 0) return "";
    $startPos = 0;
    $concatenatedArr = [];
    while ($startPos <= count($strarr) - $k) {
        $newWord = "";
        for ($i = 0; $i < $k; $i++) {
            $newWord .= $strarr[$startPos + $i];
        }
        $concatenatedArr[] = $newWord;
        $startPos++;
    }
    $indexOfTheLongest = 0;
    foreach ($concatenatedArr as $index => $word) {
        if (strlen($concatenatedArr[$indexOfTheLongest]) < strlen($word)) {
            $indexOfTheLongest = $index;
        }
    }
    return isset($concatenatedArr[$indexOfTheLongest]) ? $concatenatedArr[$indexOfTheLongest] : "";
}

longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2); // "abigailtheta"
echo "<br>";
longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1); // "oocccffuucccjjjkkkjyyyeehh"
echo "<br>";
longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 3);
