<?php

/*
 * Complete the 'noPrefix' function below.
 *
 * The function accepts STRING_ARRAY words as parameter.
 */

function noPrefix($words) {
    $len = count($words);
    $badSet = null;
 
    
   for($i = 0; $i < $len; $i++){
        $currentPrefix = $words[$i];
        $currentPrefixLength = strlen($currentPrefix);
        //$currentPrefixLengthNegative = 0 - $currentPrefixLength;
        
        
        //echo "currentPrefix: $currentPrefix \r";
        //echo "Length: $currentPrefixLength \r\n";
        
        for($j = 0; $j < $len; $j++){
            
            $currentSet = $words[$j];
            $currentSetLength = strlen($currentSet);
            
            
            //do not compare to itself
            //do not process if prefix is longer than set its comparing against
            if ($i != $j && $currentPrefixLength <= $currentSetLength){
                
                $prefix = substr($currentSet, 0, $currentPrefixLength);
               //echo "currentPrefix: $currentPrefix and substr: $prefix\r\n";
                
                //current set returns bad set (POSITIVE)
                if ($prefix == $currentPrefix){
                    $badSet = $currentSet;
                    //break;
                }
                
            }
            
            //breaks if BAD SET is found
            if ($badSet != null){
                //break;
            }
        } //ends for $j
        //breaks if BAD SET is found
        if ($badSet != null){
            //break;
        }
    } //ends for $i
    
    if($badSet != null){
        echo "BAD SET\r\n";
        echo $badSet;
    }
    else{
        echo "GOOD SET\r\n";
    }
}

$n = intval(trim(fgets(STDIN)));

$words = array();

for ($i = 0; $i < $n; $i++) {
    $words_item = rtrim(fgets(STDIN), "\r\n");
    $words[] = $words_item;
}

noPrefix($words);
