<?php
/*
5. Write a PHP script to  
a) transform a string all uppercase letters. 
b) transform a string all lowercase letters. 
c) make a string's first character uppercase. 
d) make a string's first character of all the words uppercase. 
*/

$a="pasupuleti venkata koteswararo";
$b=strtoupper($a);
echo "$b";
echo "<br/>";
$c="chandra";
$d=strtolower($c);
echo "$d";
echo "<br/>";
$e=ucfirst($a);
echo "$e";
echo "<br/>";
echo ucwords("hai ram");

?>