<?php

//2. Write a PHP program to swap two variables?
function swap_numbers($num1,$num2){
    echo "Before Swap the numbers are num1 is :$num1 and num2 is $num2";
    $num1=$num1+$num2;
    $num2=$num1-$num2;
    $num1=$num1-$num2;
    echo "<br/>";
    echo "Before Swap the numbers are num1 is :$num1 and num2 is $num2";
}
swap_numbers(10,20);

?>