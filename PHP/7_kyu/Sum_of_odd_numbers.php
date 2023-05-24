<?php 
echo"Sum of odd numbers<br>";

function rowSumOddNumbers($n) {
    $howManyOddNumberToGenerate = null;
    for( $i = $n; $i > 0; $i-- ) {
        $howManyOddNumberToGenerate += $i;
    }
    // echo"howManyOddNumberToGenerate: $howManyOddNumberToGenerate<br>";

    $arrOfOddNumbers = array();
    for( $i = 0; $i < $howManyOddNumberToGenerate*2; $i++){
        if( $i % 2 == 1 ){
            array_push($arrOfOddNumbers, $i);
        }
    }
    // foreach($arrOfOddNumbers as $number){
    //     echo"$number ";
    // }
    $arrWithTargetedRow = array_slice($arrOfOddNumbers, $howManyOddNumberToGenerate-$n,$n);
    $sumOfOddsInRow = array_sum($arrWithTargetedRow);

    return $sumOfOddsInRow;
  }

// rowSumOddNumbers(1);// (1, 
// rowSumOddNumbers(2);// (8, 
// rowSumOddNumbers(13);// (2197, 
// rowSumOddNumbers(19);// (6859,
// rowSumOddNumbers(41);// (68921,
// rowSumOddNumbers(42);// (74088, 
// rowSumOddNumbers(74);// (405224,
// rowSumOddNumbers(86);// (636056,
// rowSumOddNumbers(93);// (804357,
// rowSumOddNumbers(101);// (1030301,

// $n * $n * $n xD

?>