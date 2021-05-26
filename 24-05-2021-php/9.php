<?php
#9.Write a PHP script for multiplication of variables that pass by reference and pass by value? 

function multipication(&$num1,&$num2){
     $multplication=$num1*$num2;
     echo $multplication;
}
$num1=15;
$num2=25;
multipication($num1,$num2)

?>