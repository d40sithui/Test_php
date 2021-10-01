<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $len = count($arr);
    $positives = 0;
    $negatives = 0;
    $zeros = 0;
    
   for ($i = 0; $i < $len; $i ++){
       
       //positive
       if($arr[$i] > 0){
           $positives++;
       }
       
       //negative
       elseif($arr[$i] < 0){
           $negatives++;
       }
       
       else{
           $zeros++;
       }
   }

    $positiveRatio = $positives / $len;
    $negativeRatio = $negatives / $len;
    $zeroRatio = $zeros / $len;

    echo number_format((float)$positiveRatio, 6, '.', '')."\n";
    echo number_format((float)$negativeRatio, 6, '.', '')."\n";
    echo number_format((float)$zeroRatio, 6, '.', '')."\n";



}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
