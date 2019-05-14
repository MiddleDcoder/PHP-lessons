<!Doctype html>
<html>
    <head>
        <title>PHP lessons</title>
    </head>
    <body>
        <form action="process.php" method="post">
            <input name="name" type="text">
            <input type="submit">
        </form>
    <?php 
    //echo "Hello PHP !";

    // $myVar = "This is my variable";

    // echo $myVar;

    // $name = "Jhun";

    // echo "Hello, " . $name;

    $people = array("Alice", "Bob", "JL");
    print_r($people);

    echo "<br>";
    echo $people[2];

    

    foreach ($people as $person => $value) {
        # code...
        echo $person . ' ';
    }

    echo "<br>";

    $numbers = array(5,3,7);
    $sum = 0;


    
    foreach ($numbers as $number){
        $sum = $sum + $number;
    }

    echo $sum;
    ?>
    </body>
</html>