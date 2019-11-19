<?php
/**
 * Created by PhpStorm.
 * User: kodynska
 * Date: 18.11.2019
 * Time: 17:05
 */



//The total of little rectangles is 3x3 grid
// 1x1 = 1
// 2x2 =4
// 3x3 = 9
//
//1 little rectangles height x 2 little rectangles length (in one row=2, in 3-columns)= 2x3 = 6
//
//1 little rectangles x 3 little rectangles length = 1x3 = 3
//
//2 little rectangles height x 1 little rectangles length = 2x3 = 6
//
//2 little rectangles height x 3 little rectangles length = 1x2 = 2
//
//3 little rectangles height x 1 little rectangles length = 1 x 3 = 3
//
//3 little rectangles height x 2 units little rectangles = 1x2 = 2
//
//Total 36

function count1($a, $b )  {
    $sum = 0;
    for( $i=0; $i<$a; $i++){
        for( $j=0; $j<$b; $j++){
            // here I get these combinations and sum them up
            $sum += ($i+1)*($j+1);
        }
    }
    return $sum;
}


count1(3,3);