<?php
 $num1=10;
 $num2=15;
 $num3=14;

 if($num1>$num2 && $num1>$num3){
    echo"the largest number is " . $num1. "<br>";
 }
 elseif($num2>$num1 && $num2>$num3){
    echo"the largest number is " . $num2. "<br>";
 }
 else{
    echo "the largest number is ". $num3. "<br>";
 }
 ?>
