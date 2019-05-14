<?php session_start();?><!-- start session -->
<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>
    <pre> 
Using session_unset() will remove all of the global variable, while session_destroy()
will destroy the session entirely (however the effect of both is similar).</pre>

 <?php 
    session_unset();  //remove all session variables
    session_destroy();  //remove all session variables
 ?>

    </body>
</html>
