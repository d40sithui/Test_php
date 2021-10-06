<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */


$t = intval(trim(fgets(STDIN))); //length of q
$string[] = ""; //initialize empty string array


for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");
    //print"$s\n";
    
    $temp = explode(" ", $s); //transform input into array for easier processing
    $len = count($temp);
    $lenString = count($string);   
    
    
    //append (1), delete (2), or print (3)
    if($len == 2){
        
        //append
        if($temp[0] == 1){
            
            //get last element in the array
            $newString = $string[$lenString-1].$temp[1];
            array_push($string, $newString);
            
            //print "newString: $newString\n";
        }        
        
        //delete last x chars, x = temp[1]
        elseif ($temp[0] == 2){
            $newString = $string[$lenString-1];
            //print "newString: $newString\n";

            $newString = substr($newString,0,-$temp[1]);
            array_push($string, $newString);

        }
        
        //print
        elseif ($temp[0] == 3){
            
            //prints last element, which represents the last change
            //prints only the single character at $temp[1] location 
            print substr($string[$lenString-1], $temp[1]-1, 1)."\n";
        }
    }
    
    //undo
    else{
        //deletes last element in the array
        array_pop($string);
    } 
}

//print_r($string);

fclose($_fp);


?>