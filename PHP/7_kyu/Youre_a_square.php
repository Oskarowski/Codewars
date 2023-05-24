<?php 
echo"You're a square! <br>";

function isSquare($n){
    if( $n < 0 ) return false;
    return sqrt($n) == floor(sqrt($n));
}
  

    if(isSquare(-1)) echo"-1 true <br>";
    if(isSquare(0)) echo"0 true <br>";   
    if(isSquare(3)) echo"3 true <br>";
    if(isSquare(4)) echo"4 true <br>";
    if(isSquare(25)) echo"25 true <br>";
    if(isSquare(26)) echo"26 true <br>";
?>