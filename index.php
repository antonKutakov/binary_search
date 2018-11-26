<?php

function binary_search($array = array(), $vars = array(), &$find){

    if(count($array) <= 1)
        return;

    for ($i = 0; $i < count($vars); $i++) {
            
        $var = $vars[$i];

        $first = 0;
        $last = count($array)-1;

        while($first < $last){
        // var_dump($var);
            $mid = $first + floor(($last - $first) / 2);
            // echo "Array[mid] ".$array[$mid]."<br>";
            if($array[$mid] >= $var){
                $last = $mid;
            }
            else{
                $first = $mid + 1;
            }
        } 
    
        if($array[$last] === $var){
            // echo (int)$array[$last]." ";
            $find[$i] = $array[$last];
        }
        else{
            return null;
        }

    }
    
}

function recursive_binary_search(){

}

$array = array(1, 2, 3, 4, 5, 6, 7);
$fillable_array = array(2, 4);
$find = array();
binary_search($array, $fillable_array, $find);

var_dump($find);