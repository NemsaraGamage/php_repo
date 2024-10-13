<!-- To run this use -->
<!-- php -S localhost:8000 -->
<!-- then go to: http://localhost:8000/filename.php -->

<!-- A PHP script starts with ?php and ends with ?> -->
<?php ?>

<!-- A simple .php file with both HTML code and PHP code: -->
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<!-- Case Sensitivity -->
<h2>Case Sensitivity</h2>
    <?php
    // php is like java ends with ';'
    /* In PHP, keywords (e.g. if, else, while, echo, etc.), 
    classes, functions, and user-defined functions are not 
    case-sensitive. */
    echo "Hello World!". "<br>";
    Echo "Hello World!". "<br>";
    ECHO "Hello World!". "<br>";
    EcHo "Hello World!". "<br>";
    ?>

<!-- Print Example -->
<h2>Print Example</h2>
    <?php
    /* only the first statement will display the value of the 
    $color variable! This is because $color, $COLOR, 
    and $coLOR are treated as three different variables: */
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    // can use html tags as well
    $txt2 = "W3Schools.com";
    echo "<p>Study PHP at $txt2</p>";

    // print can also be used
    print "I'm about to learn print in PHP!";
    ?>

<!-- PHP Variables -->
<h2>PHP Variables</h2>
    <?php
    /* In PHP, a variable starts with the $ sign, 
    followed by the name of the variable: */
    // Variable names are case sensitive 
    // A variable name must start with a letter or the underscore character
    // Like python we don't need to define type of variable it is
    $a = 5;
    $b = "John";
    echo $a. "<br>";
    echo $b. "<br>";

    // calling a variable within the print
    $txt = "Php is not bad!";
    echo "I think $txt" . "<br>";

    // basic operations of the variable within the print
    $x = 5;
    $y = 4;
    echo "output: ". $x + $y. "<br>";

    // You can assign the same value to multiple variables in one line:
    $x = $y = $z = "Fruit";
    echo $x. "<br>";
    echo $y. "<br>";
    echo $z. "<br>";

    // Variables can also be emptied by setting the value to NULL:
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    // Concatenate Strings
    echo "<br>";
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z;

    ?>

    <h3>var_dump()</h3>
    <pre>
    <?php
    // The var_dump() function returns the data type and the value:
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);
    ?>
    </pre>

    <h3> global</h3>
    <?php
    // The global keyword is used to access a global variable from within a function.
    $x = 5;
    $y = 10;
    function myTest() {
    global $x, $y;
    $y = $x + $y;
    }
    myTest();
    echo $y; // outputs 15
    ?>

    <h3>strlen()</h3>
    <!-- The PHP strlen() function returns the length of a string. -->
    <?php 
    echo strlen("Hello world!");
    ?>

    <h3>str_word_count()</h3>
    <!-- Count the number of word in the string "Hello world!": -->
    <?php 
    echo str_word_count("Hello world!");
    ?>

    <h3>strpos()</h3>
    <!-- Count the number of word in the string "Hello world!": -->
    <?php 
    echo strpos("Hello world!", "world");
    ?>

    <h3>strtoupper()</h3>
    <!-- The strtoupper() function returns the string in upper case: -->
    <?php 
    $x = "Hello World!";
    echo strtoupper($x);
    ?>

    <h3>strtolower()</h3>
    <!-- The strtolower() function returns the string in lower case: -->
    <?php 
    $x = "Hello World!";
    echo strtolower($x);
    ?>

    <h3>str_replace()</h3>
    <!-- Replace the text "World" with "Dolly": -->
    <?php 
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);
    ?>

    <h3>strrev()</h3>
    <!-- Reverse the string "Hello World!": -->
    <?php 
    $x = "Hello World!";
    echo strrev($x);
    ?>

    <h3>trim()</h3>
    <!-- The trim() removes any whitespace from the beginning or the end: -->
    <?php 
    $x = " Hello World! ";
    echo trim($x);
    ?>

    <h3>substr()</h3>
    <!-- Start the slice at index 6 and end the slice 5 positions later: -->
    <?php 
    $x = "Hello World!";
    echo substr($x, 6, 5);
    echo "<br>";
    ?>

<!-- PHP Array -->
<h2>PHP Array</h2>
    <?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    ?>

<!-- PHP Numbers -->
<h2>PHP Numbers</h2>

</body>
</html>
