<?php 
echo"Moving Zeros To The End<br>";

function moveZeros(array $items): array
{
    $numbersOfZerosToPushAtTheEnd = 0;
    $arr = [];
    foreach($items as $item){
        // echo" $item <br>";
        if( is_array($item) ) array_push($arr, $item);
        else if( strval($item) == "0" ) $numbersOfZerosToPushAtTheEnd++;
        else array_push($arr, $item);
    }
    for($i = 0; $i < $numbersOfZerosToPushAtTheEnd; $i++){
        array_push($arr, 0);
    }
    // echo"<br> $numbersOfZerosToPushAtTheEnd ";
    return $arr;
}

echo"<br>";
$case1 = moveZeros([false,1,0,1,2,0,1,3,"a"]); // returns[false,1,1,2,1,3,"a",0,0]

// moveZeros([1,2,0,1,0,1,0,3,0,1]));
// moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));
// moveZeros(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9]));
// moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]));
// moveZeros([0,1,null,2,false,1,0]));
// moveZeros(["a","b"]));
// moveZeros(["a"]));
// moveZeros([0,0]));
// moveZeros([0]));
// moveZeros([false]));
// moveZeros([]));