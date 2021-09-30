<?php

/*
 * Complete the 'noPrefix' function below.
 *
 * The function accepts STRING_ARRAY words as parameter.
 */

function noPrefix($words) {
    
    $wordsPrefix = $words;
    $badSet = null;
    
    /*foreach($wordsPrefix as $prefix){
        foreach($words as $word){
            if($word != $prefix){
                if(substr($word, 0, strlen($prefix))== $prefix){
                    $badSet = $word;
                    break;
                }
            }
        }
        
        if ($badSet != null){
            break;
        }
    }*/
    
    
    
       foreach($words as $word){
        foreach($wordsPrefix as $prefix){
            if($word != $prefix){
                if(substr($word, 0, strlen($prefix)) == $prefix) {
                    $badSet = $word;
                    break;
                } 
                
            }
        }
        
        if ($badSet != null){
            break;
        }
    }
 
    
   
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
