<?php 
echo"Buying a car <br>";

/*
@parameter (positive int or float, guaranteed) start_price_old (Old car price)
@parameter (positive int or float, guaranteed) start_price_new (New car price)
@parameter (positive int or float, guaranteed) saving_per_month 
@parameter (positive float or int, guaranteed) percent_loss_by_month
*/
function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    $numberOfMonths = 0;
    $percentLossByMonth = $percentLossByMonth/100;
    $savings = 0;

    while($savings + $startPriceOld < $startPriceNew){
        $numberOfMonths++;

        $savings += $savingPerMonth;

        if($numberOfMonths % 2 == 0){
            $percentLossByMonth += (0.5 / 100);
        }
        
        $startPriceNew = $startPriceNew - ($startPriceNew * $percentLossByMonth);
        $startPriceOld = $startPriceOld - ($startPriceOld * $percentLossByMonth);

        echo"<br>\$savings: $savings <br>";
        echo"\$needed: " . $savings + $startPriceOld - $startPriceNew . "<br>";
        echo"\$montlyDecreaseInValue: $percentLossByMonth <br>";
        echo"\$startPriceNew: $startPriceNew <br>";
    }
    $total = round($savings + $startPriceOld - $startPriceNew);

    echo"<br> \$numberOfMonths: $numberOfMonths \$total: $total <br>";

    return [$numberOfMonths, $total];
}

$case1 = nbMonths(2000, 8000, 1000, 1.5); //[6, 766]);
$case2 = nbMonths(12000, 8000, 1000, 1.5); //[0, 4000]);
$case3 = nbMonths(8000, 12000, 500, 1); //[8, 597]);
?>