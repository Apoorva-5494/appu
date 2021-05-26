<?php
#11. Write a PHP script for reverse of string by using for loop? 
$name="venkey";
$lenght=strlen($name);
for($i=$lenght-1;$i>=0;$i--){
    echo $name["$i"];
}

?>