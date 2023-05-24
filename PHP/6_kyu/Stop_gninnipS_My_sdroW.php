<?php 
echo"Stop gninnipS My sdroW!<br>";

function spinWords(string $str): string {
    $splitedStr = explode(" ", $str);
    echo"<br>";
    print_r($splitedStr);
    for( $i = 0; $i < count($splitedStr); $i++) {
        $word = $splitedStr[$i];
        if( strlen($word) >= 5){
            $word = strrev($word);
            $splitedStr[$i] = $word;
        }
    }
    return implode(" ", $splitedStr);
}












spinWords( "Hey fellow warriors" ); // => returns "Hey wollef sroirraw" 
spinWords( "This is a test"); // => returns "This is a test" 
spinWords( "This is another test" ); // => returns "This is rehtona test"




?>