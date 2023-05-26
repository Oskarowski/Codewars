<?php
echo "Count the Digit <br>";

function nbDig($n, $d)
{
    $arrK = [];
    for ($i = 0; $i <= $n; $i++) {
        $arrK[] = $i ** 2;
    }
    echo "<br>";
    echo implode(' ', $arrK);
    $including = [];
    foreach ($arrK as $e) {
        $estr = strval($e);
        $split = str_split($estr);
        // var_dump($split, "<br>");
        for ($i = 0; $i < count($split); $i++) {
            if ($split[$i] == $d) {
                $including[] = $e;
                continue;
            }
        }
    }
    echo "<br>";
    echo implode(' ', $including);
    return count($including);
}


nbDig(10, 1);
