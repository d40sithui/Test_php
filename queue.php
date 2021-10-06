<?php

$a = array(); //store the current queue
//print_r($arr);

//array_push($a, 12345);

//print_r($a);



$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$t = intval(trim(fgets(STDIN))); //length of q


for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");
    

   queue($s);

    //fwrite($_fp, $result . "\n");
}

fclose($_fp);


function queue($s){
    //print  "s: $s\n";
    //print "in queue\n";
    global $a; //php functions scope only sees local vars inside the function    
    //break $s into an array
    $temp = explode(" ", $s);
    $len = count($temp);
    
    //print_r($temp);
    
    
 
    //enqueue
     if($len == 2){
        array_push($a, $temp[1]);
        //$arr[] = $temp[1];
     }
    
    //dequeue or print
    elseif ($len == 1){
        
        
        //dequeue or remove first element
        if ($temp[0] == 2){
            array_shift($a);
        }
        
        //print the value
        else{
            echo $a[0]."\n"; 
        }
    }

}


?>
