<?php
function flatten_and_sort($array)
{
    if (empty($array)) return [];
    $flattened = [];
    foreach ($array as $arr) {
        foreach ($arr as $e) {
            $flattened[] = $e;
        }
    }
    sort($flattened, SORT_NUMERIC);
    return $flattened;
}
