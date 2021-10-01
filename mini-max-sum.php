<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $len = count($arr);
    $sums = [];
    
    for($i = 0; $i < $len; $i++){
        
        $sums[$i] = 0;
        
        for ($j = 0; $j < $len; $j++){
            
            if($i != $j){
                $sums[$i] += $arr[$j];
            }
        }
    }
    
    sort($sums);
    
    $len_sums = count($sums);
    
    echo $sums[0]." ";
    echo $sums[$len_sums - 1];
   

}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
