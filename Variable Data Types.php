<?php
/*
PHP allows several different types of variables. For this PHP exercise, you will create one variable and assign it 
different values, then test its type for each value.

Write a script using one variable “$whatsit” to print the following to the browser. 
Your echo statements may include no words except “Value is”. In other words, use the function 
that will output the variable type to get the requested text. Use simple HTML to print each statement 
on its own line and add a relevant title to your page. Include line breaks in your code to produce clean, readable HTML.

Value is string.
Value is double.
Value is boolean.
Value is integer.
Value is NULL.
*/

$whatsit="vali";
echo "Value is ".gettype($whatsit)."<br>";
$whatsit=4.5;
echo "Value is ".gettype($whatsit)."<br>";
$whatsit=true;
echo "Value is ".gettype($whatsit)."<br>";
$whatsit=5;
echo "Value is ".gettype($whatsit)."<br>";
$whatsit=NULL;
echo "Value is ".gettype($whatsit)."<br>";

?>