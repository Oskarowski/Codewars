<?php 
echo"Reverse words<br>";

function reverse($n)
{
    return strrev($n);
}

function reverseWords($str) {
    $arrOfWords = explode(' ', $str);    

    $arrOfWords2 = array_map(function($n) {
        return strrev($n);
    }, $arrOfWords);
    return implode(" ", $arrOfWords2);
  }


  $case1 = reverseWords('The quick brown fox jumps over the lazy dog.'); //('ehT kciuq nworb xof spmuj revo eht yzal .god', 
  $case2 = reverseWords('apple'); //('elppa', 
  $case3 = reverseWords('a b c d'); //('a b c d',
  $case4 = reverseWords('double  spaced  words'); //('elbuod  decaps  sdrow',
  $case5 = reverseWords('stressed desserts'); //('desserts stressed',
  $case6 = reverseWords('hello hello'); //('olleh olleh',

?>