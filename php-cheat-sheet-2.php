<?php session_start();?> // start session
<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>


 <?php 
  // Echo session variables that were set on previous page

    echo "The color of my choice is " . $_SESSION["color"] . 
    ".<br>";
    echo "The animal of my choice is" . $_SESSION["animal"] . ".";
 
 ?>

    </body>
</html>