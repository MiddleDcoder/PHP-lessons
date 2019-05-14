<?php session_start();?> // start session
<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>


 <?php 
//you can change a session variable by assigning a new

    $_SESSION["color"] = "red";
    print_r($_SESSION);
 ?>

    </body>
</html>