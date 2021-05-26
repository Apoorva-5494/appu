<?php

//3. Write a PHP program to remove duplicates from a sorted list. 
 //Input: (1,1,2,2,3,4,5,5) 


function remove_duplicates($s1){
    $nums=array_values(array_unique($s1));
    return $nums;
}

$list=array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates($list))

?>