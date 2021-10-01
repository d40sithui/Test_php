<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    
    $militaryTime=$s;
    
    //gets the hour
    $hour = substr($s, 0, 2);    
    echo $hour;
    
    //gets am or pm
    $daytime =  substr($s, -2);
    echo $daytime;
    
    
    
    //if daytime is PM
    if($daytime == "PM"){ 
        //only add the military time if it is past 12pm, but not 12pm
        if($hour < 12){
            $militaryTime = str_replace($hour,$hour+12,$militaryTime);
        }      
    }
    
    //if daytime is AM
    else{
        //if hour is 12 AM
        if($hour == 12){
            $militaryTime = str_replace($hour,"00",$militaryTime);
        }
        
        //all other cases preserve the hour

    }
    
    //remove the AM/PM
    $militaryTime = str_replace($daytime, "", $militaryTime);  
    return $militaryTime;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
