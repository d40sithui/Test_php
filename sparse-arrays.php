<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    // Write your code here
    
    print_r($strings);
    print_r($queries);
    
    
    
    //gets length of each array
    $queryLength = count($queries);
    $stringLength = count($strings);
    
    //creates array to track counter 
    $matches = array();
    
    //loop through each element in the queries array
    for($i = 0; $i < $queryLength; $i++){
        
        //initialize matches to zero
        $matches[$i] = 0;
        
        //loop through each element in the strings array
        for ($j = 0 ; $j < $stringLength; $j++){
            
            if($strings[$j] == $queries[$i]){
                $matches[$i]++;
            }
        }
    }
    
    
    return $matches;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$strings_count = intval(trim(fgets(STDIN)));

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = rtrim(fgets(STDIN), "\r\n");
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);
