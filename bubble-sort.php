<?php
$numbers = array(4, 6, 2, 22, 11,1,0,8,7,16,5);
$unsorted = $numbers;
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

$bubbleSorted = bubbleSort($unsorted);
for($x = 0; $x < $arrlength; $x++) {
  echo $bubbleSorted[$x];
  echo "<br>";
}

function bubbleSort($a){
    
    $len = count($a);
    $sorted = $a;
    
    do{
        
        $swapped = false; //resets swap var
        for ($i = 0; $i < $len-1; $i++){
            
            $current = $sorted[$i];
            $next = $sorted[$i+1];
            
            if($current > $next){
                $sorted[$i+1] = $current;
                $sorted[$i] = $next;
                $swapped = true;
            }
        }
    }
    while ($swapped);
    
    return $sorted;
}

?>