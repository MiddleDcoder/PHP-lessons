<?php session_start();?><!-- start session -->
<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>
    <pre> 

    PHP 5 offers multiple inbuilt functions to sort a PHP array. You can sort elements in
PHP in numerical, alphabetical, descending and ascending orders.
These are the various array sorting functions in PHP:
sort() – sorts a PHP array in an ascending order;
rsort() – sorts a PHP array in a descending order;
asort() – sorts associative arrays in an ascending order, by the value;
ksort() – sorts associative arrays in an ascending order, by the key;
arsort() – sorts associative arrays in a descending order, by the value;
krsort() – sorts associative arrays in a descending order, by the key.

    </pre>
    <br>
    <br>
    <br>

 <?php 
 
    $guitars = array("Fender", "Gibson", "Warvick");
    sort($guitars);


 ?>

<?php

 $numerals = array(5, 7, 3, 23, 12);
 sort($numerals);

 ?>

<?php
 $guitars = array("Fender", "Gibson", "Warvick");
 rsort($guitars);
 ?>

<?php
 $numerals = array(5, 7, 3, 23, 12);
 rsort($numerals);
 ?>

<?php
 $weight = array("Pete"=>"75", "Benjamin"=>"89",
 "Jonathan"=>"101");
asort($weight);
 ?>

<?php
 $weight = array("Pete"=>"75", "Benjamin"=>"89",
 "Jonathan"=>"101");
 ksort($weight);
 ?>

<?php
 $weight = array("Pete"=>"75", "Benjamin"=>"89",
 "Jonathan"=>"101");
 arsort($weight);
 ?>

<?php
 $weight = array("Pete"=>"75", "Benjamin"=>"89",
 "Jonathan"=>"101");
 krsort($weight);
 ?>

<pre>
    The array_push()function inserts elements into the end of an array. You can as
many values as you like. Your added elements will always have numeric keys, even
if your array has string keys. It also returns the elements number in the array. It was
newly introduced in PHP4.
</pre>

<?php
 $z=array("me","you", "he");
 array_push($z,"she","it");
 print_r($z);
?>

<br>

<?php
 $z=array("Drago"=>"blue","Rex"=>"brown");
array_push($z,"black","purple");
 print_r($z);
 ?>

    </body>
</html>
