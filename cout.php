<?php
/**
 * Created by PhpStorm.
 * User: kodynska
 * Date: 18.11.2019
 * Time: 17:05
 */


function count1($a, $b )  {
    $sum = 0;
    for( $i=0; $i<$a; $i++){
        for( $j=0; $j<$b; $j++){
            $sum += ($i+1)*($j+1);
        }
    }
    print_r($sum);
    return $sum;
}


count1(2,2);