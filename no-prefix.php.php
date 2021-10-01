<?php

/*
 * Complete the 'noPrefix' function below.
 *
 * The function accepts STRING_ARRAY words as parameter.
 */

function noPrefix($words) {
    $len = count($words);
    $prefix = $words;
    $badSet = null;
 
    
   for($i = 0; $i < $len; $i++){
        $word = $words[$i];
        $wordLength = strlen($word);
        //$currentPrefixLengthNegative = 0 - $currentPrefixLength;
        
        
        //echo "currentPrefix: $currentPrefix \r";
        //echo "Length: $currentPrefixLength \r\n";
        
        for($j = 0; $j < $len; $j++){
            
            $prefix = $words[$j];
            $prefixLength = strlen($prefix);
            
            
            //do not process if prefix is longer than set its comparing against
            if ( $wordLength > $prefixLength && $i != $j){
                
                $currentPrefix = substr($word, 0, $prefixLength);
               //echo "word: $word and prefix: $prefix and currentPrefix: $currentPrefix\r\n";
                
                //current set returns bad set (POSITIVE)
                if ($prefix == $currentPrefix){
                    $badSet = $word;
                    //break;
                }
                
            }
            
            //breaks if BAD SET is found
            if ($badSet != null){
                break;
            }
        } //ends for $j
        //breaks if BAD SET is found
        if ($badSet != null){
            break;
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
