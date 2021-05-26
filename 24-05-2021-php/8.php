<?php 
#8. Write a PHP script that inserts a new item in an array in any position. 
$original=array('1','2','3','4','5');
foreach($original as $x){
    echo "$x";
}
echo "<br/>";
$new_element=17;
$position=4;
array_splice($original,$position,0,$new_element);
foreach($original as $y){
    echo "$y";
}
?>
