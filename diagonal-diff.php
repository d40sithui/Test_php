<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
  
    $primary = 0;
    $secondary = 0;
    $leni = count($arr);
    $lenj = count($arr[0]);
    $last = $leni-1;
    
    for ($i=0; $i < $leni; $i++){
        for ($j=0; $j < $lenj; $j++){
            
            //primary
            if($i == $j){
                $primary+=$arr[$i][$j];
            }
            
            //secondary - if top row, last item
            if($i == 0 && $j == $last){
                $secondary += $arr[$i][$j];
            }
            
            //secondary if bottom row, first item
            if($i == $last && $j == 0){
                $secondary += $arr[$i][$j];
            }
            
            //secondary if neither top or bottom
            if($i != 0 && $i != $last){
                $s = $i + $j;
                if($s == $last){
                    $secondary+=$arr[$i][$j];
                }
            }
            
        }
    }
    
    echo "leni: $leni";
    echo "lenj: $lenj";
    echo "primary: $primary";
    echo "secondary: $secondary";
    
    $difference=abs($primary-$secondary);
    return $difference;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
