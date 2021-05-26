<?php
#10.Write a PHP script adding 5days to current time and display that time? 
$Today=date('y:m:d');
echo "$Today";
echo "<br/>";
//add 5 days from date
$Newdate=Date('y:m:d',strtotime('+5 days'));
echo "$Newdate";
?>