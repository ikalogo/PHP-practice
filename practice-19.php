<?php

echo "Hello world, it feels soo good to be back!\n";

/**
 * PHP is the acronym for "Hypertext Preprocessor"
 * It is an open source scripting language 
 * Its scripts are executed on the server and results are returned to the browser as HTML
 * 
 * PHP can generate dynamic page content
 * It can create, open, read, write, delete and close files on the server 
 * It can modify data in your database
 * It can collect form data
 * It can encrypt data
 * 
 * PHP runs on different platforms
 * Is compatible with almost all servers used today
 * Supports a wide range of databases
 * Is free
 * 
 * What's new in PHP 7?
 * PHP 7 is much faster than the previous stable release (version 5.6)
 * PHP 7 has improved error handling 
 * PHP 7 supports stricter Type declaration for functions arguments
 * PHP 7 supports new operators like the spaceship operator (<=>)
 * 
 * In PHP, keywords, classes, function and user defined functions are case-insensitive, while variables are case-sensitive
 * 
 * Statements end with a semicolon (;)
 */

  // Example 1: Document that prints "Hello World" on a web page:
  /*

  <!DOCTYPE html>
  <head></head>
  <html>

  <body>
  <?php
        echo 'Hello World';
  ?>
  </body>

  </html>

  */

  // Example 2: case-sensitive vs case-insensitive
  /* Case-insensitive */
  echo "Example 2: case-sensitive vs case-insensitive\n";

  ECHO "hi there\n";
  EcHo "hi there\n";
  ecHO "hi there\n";
  //all above lines run

  /* Case-sensitive */
  
  $number = 25;
  echo "I'm ".$number." years old.\n";
  echo "I'm ".$numBER." years old.\n";
  //only one line will display the correct message

  /**
   * Variables 
   * Variables are declared only by assigning a value
   * Variable must have the $ as prefix and be followed by a name formed by alpha-numeric characters and underscores
   * This name cannot begin with a number but can only begin with either a letter or an underscore
   * Variables names are case-sensitive 
   */

   //Example 3: How to output variables with the echo function
   echo "Example 3: How to output variables with the echo function\n";

   $name = "George";
   echo "My name is $name\n";
   echo "My name is ".$name."\n";
   $x = 10;
   $y = 15;
   echo $x + $y;
   echo "\n";

   /**
    * PHP is a loosely Typed language. You don't declare variable with their types, this is actually automatically inferred
    * based on the value a variable is holding
    * There are 3 variable scopes in PHP: global, static, local
    * When a variable is declared outside a function its scope is global; if vice versa the variable scope is local
    * A static scope variable is a variable that is declared within a function and retains its value out of the function 
    * after say execution (normally in local variable are deleted after the function's execution).
    */

    //Example 4: Variable scope
    echo "Example 4: Variable Scope\n";
    $a = 10;
    $b = 5;

    function addition() {
       $c = 1;
       $d = 2;
       static $ee = 35;
       echo "local variables c and d's sum from within the function ".(string)($c+$d)."\n";
       global $a, $b;
       echo "global variables a and b's sum from within the function ".(string)($a+$b)."\n";
       echo "global variable a printed from within the function ".$GLOBALS['a']."\n";
    }

    echo "global variables a and b's sum is ".(string)($a+$b)."\n";
    echo "local variables c and d's sum out of the function ".(string)($c+$d)."\n";
    echo "static variable ee printed before its declaring function's call ".(string)$ee."\n";
    addition();

?>