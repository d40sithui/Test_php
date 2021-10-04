<?php

/*
 * Complete the 'caesarCipher' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER k
 */

function caesarCipher($s, $k) {
    // Write your code here
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    
    $arr_len = count($alphabet);
    $s_len = strlen($s);
    $s_new = null;
    
    //print_r($alphabet);
    print "s_len: $s_len\n";
    print "alphabet_len: $arr_len\n";
    
    for($i =0; $i < $s_len; $i++){
        
        //current character
        $char = substr($s, $i,1);
        
        //tracks case of each character
        $upper  = false;
        
        //if current character is upper case, note it and convert to lower
        if(ctype_upper($char)){
            $upper = true;
            $char  = strtolower($char);
        }
        
        
        print "char: $char\n";
        
        //find the array key for the current substr
        $key = array_search($char, $alphabet);
    
        //if key is found (ie, not a special char)
        if(is_numeric($key)){
             print "key: $key\n";
             
             $cipher = $key+$k;
             $cipher = fmod($cipher, $arr_len);
             
             print "cipher: $cipher\n";
             
             
             //if char was originally upper case, keep the case
             if($upper){
                 $s_new .= strtoupper($alphabet[$cipher]);
             }
             else{
                //cipher the char, and append to string
                $s_new .= $alphabet[$cipher];
             }
        }
        
        //if special char, append it as-is
        else{
            $s_new .= $char;
        }
        
    }
    
    print "$s_new\n";
    
    return $s_new;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s = rtrim(fgets(STDIN), "\r\n");

$k = intval(trim(fgets(STDIN)));

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
