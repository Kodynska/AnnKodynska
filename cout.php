<?php
/**
 * Created by PhpStorm.
 * User: kodynska
 * Date: 18.11.2019
 * Time: 17:05
 */

//You can now set the number of dots (not squares)
function count1($a, $b)
{
    $sum = 0;
    for ($i = 1; $i <= $a - 1; $i++) {
        for ($j = 1; $j <= $b - 1; $j++) {
            $sum += ($a - $i) * ($b - $j);
        }
    }
    return $sum;
}

count1(3, 3);

// or using the formula
function count2($a, $b)
{
    $sum = ($a) * ($a - 1) * $b * ($b - 1) / 4;
    return $sum;
}

count2(3, 3);