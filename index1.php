<?php

// create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://m.vk.com/");

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        // $output contains the output string 
        $output = curl_exec($ch);
echo "34543";
	    echo $output;

        // close curl resource to free up system resources 
        curl_close($ch);      
