<?php session_start();?> // start session
<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>
    <pre> A session is a methods of storing data (using variables) so the browser can use it
throughout multiple webpages. In contrast to cookies, the data is not kept on the user’s
system. Session variables contain data about the current user, and all pages contained
in a single web application. The session ends once the window or tab in which the
webpage was loaded, is closed. </pre>

 <?php 
 
 $_SESSION["color"]= "blue";  // Set session variables
 $_SESSION["animal"]= "dog";
 echo "The session variable are set up.";
 
 ?>

    </body>
</html>