<?php
$rollno=array("amar"=>"10","virat"=>"5","tilak"=>"25");
ksort($rollno);

foreach($rollno as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>