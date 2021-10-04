<?php

/*
 * Complete the 'flippingMatrix' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY matrix as parameter.
 */

function flippingMatrix($matrix) {
    $n = count($matrix);
    $sum = 0;
    
    print ("n is $n\n");
    
    for ($i = 0; $i < $n/2; $i++){
        for ($j = 0; $j < $n/2; $j++){
            
            $topLeft = $matrix[$i][$j];
            $topRight = $matrix[$i][$n-1-$j];
            $bottomLeft = $matrix[$n-1-$i][$j];
            $bottomRight = $matrix[$n-1-$i][$n-1-$j];
            
            
            print "topLeft: $topLeft\n";
            print "topRight: $topRight\n";
            print "bottomLeft: $bottomLeft\n";
            print "bottomRight: $bottomRight\n";
            
            $max = max($topLeft, $topRight, $bottomLeft, $bottomRight);
            print "max: $max\n";
            
            $sum+=$max;
            
            print "sum: $sum\n";
            
            
        }
        
        print "\n";
    }
    
    return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $matrix = array();

    for ($i = 0; $i < (2 * $n); $i++) {
        $matrix_temp = rtrim(fgets(STDIN));

        $matrix[] = array_map('intval', preg_split('/ /', $matrix_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = flippingMatrix($matrix);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
