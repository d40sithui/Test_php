<?php

/*
 * Complete the 'cookies' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY A
 */
 
 


function cookies($k, $A) {
    // Write your code here
    //print_r($A);
    global $originalLen; //need to pull this var in here to determine the number of iterations
    
    //get length of $A
    $len = count($A);
    
    
    //sort the array
    sort($A);
    
    //tracks if the sweetness is greater than $k
    $sweetEnough = true;
    $leastSweet = 0;
    $secondLeastSweet = 0;
    
    //print_r($A);
    
    //determine if all elements in array are larger than $k
    for ($i = 0; $i < $len; $i++){
        if($A[$i] < $k){
            $sweetEnough = false;
            
            //if least sweet var is still 0, populate it
            if($leastSweet == 0 ) {
                $leastSweet = $A[$i];
                $secondLeastSweet = $A[$i+1];
            }       
        }
    }
    
    //if all values are greater than $k (default case)
    if($sweetEnough){
        return $originalLen-$len;
    }
    
    else{
        //remove the first two elements of the array
        array_shift($A);
        array_shift($A);
        
        //new sweetness
        $newSweet = ($secondLeastSweet * 2) + $leastSweet;
        
        //add the new sweetness to the array
        array_push($A, $newSweet);
        
        //recurse, send the new array back to this function
        return cookies($k, $A);
        
            
    }
    

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$A_temp = rtrim(fgets(STDIN));

$A = array_map('intval', preg_split('/ /', $A_temp, -1, PREG_SPLIT_NO_EMPTY));

$originalLen = count($A);

$result = cookies($k, $A);

fwrite($fptr, $result . "\n");

fclose($fptr);
