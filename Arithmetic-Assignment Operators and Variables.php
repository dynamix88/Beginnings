<?php

/**
 * @author lolkittens
 * @copyright 2018
 */
/*
Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.
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