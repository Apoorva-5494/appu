<?php 

//7.Write PHP Program to print the sum of two number while passing them through the form and by using function? 
function sum($n1,$n2){
    $sum=$n1+$n2;
    echo "The sum of two numbers is:$sum";
}
$n1=$_POST['num1'];
$n2=$_POST['num2'];
sum($n1,$n2)

?>