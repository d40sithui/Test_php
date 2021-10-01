<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    // Write your code here
    $lonelyInt = null;
    $len = count($a);

    print_r($a);
    
    //if the array has less than 3 elements
    if($len < 3){
        return $a[0];
    }
    
    //loop through array if otherwise
    else{
        for($i = 0; $i < $len; $i++){
        
            //store the current integer in a temporary variable
            $currentInteger  = $a[$i];
            $lonelyInt = $currentInteger; //assign this var as the lonelyInt to start
        
        
        
            //compare the current int to all other elements in the array
            for ($j = 0; $j < $len; $j++){
                
                //if a duplicate int is found and its not the current array key, reset the lonelyInt var
                if($a[$i] == $a[$j] && $i != $j){
                    $lonelyInt = null; //reset this var if we find the same int
                }
            }
        
        
            //if lonelyInt is found, stop the loop
            if ($lonelyInt != null){
                break;
            }
        }
    
        return $lonelyInt;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    // Write your code here
    $lonelyInt = null;
    $len = count($a);

    print_r($a);
    
    //if the array has less than 3 elements
    if($len < 3){
        return $a[0];
    }
    
    //loop through array if otherwise
    else{
        for($i = 0; $i < $len; $i++){
        
            //store the current integer in a temporary variable
            $currentInteger  = $a[$i];
            $lonelyInt = $currentInteger; //assign this var as the lonelyInt to start
        
        
        
            //compare the current int to all other elements in the array
            for ($j = 0; $j < $len; $j++){
                
                //if a duplicate int is found and its not the current array key, reset the lonelyInt var
                if($a[$i] == $a[$j] && $i != $j){
                    $lonelyInt = null; //reset this var if we find the same int
                }
            }
        
        
            //if lonelyInt is found, stop the loop
            if ($lonelyInt != null){
                break;
            }
        }
    
        return $lonelyInt;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
