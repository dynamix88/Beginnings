<?php
/*
When you are writing scripts, you will often need to see exactly what is inside your variables. For this PHP exercise, think of the ways you can do that, then write a script that outputs the following, using the echo statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL
*/

$value = 8;
echo "Value is now $value";
echo "</br>";
$value+=2;
echo "Add 2. Value is now $value";
$value-=4;
echo "</br>";
echo "Substract 4. Value is now 6";
$value*=5;
echo "</br>";
echo "Multiply by 5. Value is now $value";
echo "</br>";
$value/=3;
echo "Divide by 3. Value is now $value";
echo "</br>";
$value++;
echo "Increment value by one. Value is now $value";
echo "</br>";
$value--;
echo "Decrement value by one. Value is now $value";
echo "</br>";


?>