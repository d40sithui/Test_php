<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    //print_r($arr);
    
    
    //gets length of array
    $len = count($arr);
    
    
    //tracks sum of diagonals
    $leftToRight = 0;
    $rightToLeft = 0;
    
    //loop through matrix
    for($i = 0; $i < $len; $i++ ){
        
        
        for ($j = 0; $j < $len; $j++){
            
            //left-to-right diagonal
            if($i == $j){
                $leftToRight += $arr[$i][$j];
            }
            
            //right-to-left diagonal top most right
            if($i == 0 && $j == $len-1){
                $rightToLeft+=$arr[$i][$j];
            }
            
            //right-to-left diagonal bottom most left
            if ($i == $len-1 && $j == 0){
                $rightToLeft+=$arr[$i][$j];
            }
            
            //right-to-left diagonal neither top or bottom
            if ($i!=0 && $i!=$len-1){
                
                //right-to-left diagonals arr[len-1-i, len-1-j] where the sum of the index equals to len-1
                //in a 4x4 matrix, these values are arr[1,2], arr[2,1]
                $d = $i + $j;
                
                if($d == $len-1){
                    $rightToLeft+=$arr[$i][$j];
                }
                
            }
            
        }
    }
    
    print "left-to-right: $leftToRight\n";
    print "right-to-left: $rightToLeft\n";
    
    return abs($rightToLeft-$leftToRight);

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
