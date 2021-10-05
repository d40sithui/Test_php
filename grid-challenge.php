<?php

/*
 * Complete the 'gridChallenge' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING_ARRAY grid as parameter.
 */

function gridChallenge($grid) {
    // Write your code here
    //print_r($grid);
    
    //length of array
    $len = count($grid);
    $stringParts = array();
    
    echo "len is $len\n";
    
    
    //loop through each ROW and sort
    for ($i = 0; $i < $len; $i++){
        $string = $grid[$i];
        $stringParts[$i] = str_split($string);
        sort($stringParts[$i]);
        $sortedString =implode($stringParts[$i]);
        $grid[$i] = $sortedString;
        
        print "stringParts: $sortedString\n";    
    }
    
    
    //print_r($stringParts);
    $stringPartsLenY = count($stringParts);
    $stringPartsLenX = count($stringParts[0]);
    //loop through each COLUMN and sort into a temp string
    for ($i = 0; $i < $stringPartsLenX; $i++){
        $temp = "";
        for ($j = 0; $j < $stringPartsLenY; $j++){
            $temp .= $stringParts[$j][$i];
        }
        
        
        //sort the temp string
        $sortedTemp = sortString($temp);
        print "temp: $temp\n";
        print "sortedTemp: $sortedTemp\n";
        print "\n";
        
        
        //compare the sorted string vs the original temp
        //if they are not equal, immediately return NO & get out of loop
        if($temp != $sortedTemp){
            return "NO";
            break;
        }
    }
    
    //if the loop goes without any "NO", return yes
    return "YES";
    
    
}


function sortString($s){
    $parts = str_split($s);
    sort($parts);
    $sortedString =implode($parts);
    return $sortedString;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $grid = array();

    for ($i = 0; $i < $n; $i++) {
        $grid_item = rtrim(fgets(STDIN), "\r\n");
        $grid[] = $grid_item;
    }

    $result = gridChallenge($grid);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
