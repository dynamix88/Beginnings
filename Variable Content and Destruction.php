<?php
/*
When you are writing scripts, you will often need to see exactly what is inside your variables. 
For this PHP exercise, think of the ways you can do that, then write a script that outputs the following,
using the echo statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL
*/
echo "Varianta 1";
echo "<hr>";
////////////////////////
$nume="Harry";
var_dump($nume);
print_r ($nume);

$var=28;
var_dump($var);
$var="";
var_dump($var);
$var=null;
var_dump ($var);
echo "<br>";
echo "Varianta 2";
echo "<hr>";

///////////////////////////////////////////////////////
//////////////////////////////////////////////////////

$name='Harry'; 
$age=28;   
 
var_dump($name); 
echo "<br/>";   
 
print_r ($name); 
echo "<br/>";   
 
var_dump ($age); 
echo "<br/>";  
 
$name=null;
//In PHP versions up to 5.3.3, this statement could also have 
//been written: unset($name);, and the next command would work correctly. 
//More recent versions return an undefined variable error 
//for var_dump after the variable is unset.
 
var_dump ($name);
//The last two statements would have worked just as well with the $age variable.
?>