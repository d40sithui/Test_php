<?php

/*
 * Complete the 'superDigit' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. STRING n
 *  2. INTEGER k
 */

function superDigit($n, $k) {
    // Write your code here
    
    //when $n is one digit, return it
    if(strlen($n)==1){
        return $n;
    }
    
    //when $n is greater than one digit, calculate sum and send results back into the function
    else{
        //when $k is not zero, we concatenate and send the results back to the function
        if($k == 0){
            $len = strlen($n);
            $newN = 0;
            for ($i = 0; $i < $len; $i++){
                
                $char =  substr($n, $i, 1);
                print "char: $char\n";
                $newN+= $char;
            }
            print "newN: $newN\n";
            return superDigit($newN, 0);
        }
        
        //when $k is zero, we calculate the sum and send the results back into the function
        //this will run ONE time at initial function call
        else{
            //concatenate $n, $k number of times
            $newN  = $n;
            
            for ($i = 1; $i < $k; $i++){
                $newN .= $n;
            }
            
            return superDigit($newN, 0);
            
        }
    }
}



$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = $first_multiple_input[0];

$k = intval($first_multiple_input[1]);

$result = superDigit($n, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
