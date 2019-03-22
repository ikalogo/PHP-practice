<?php

//Echo and Print statements 

/**
 * Both mainly used to print output on the screen. Echo is marginally faster than print.
 * Print, unlike echo can only accept on argument and has a return value of 1, hence it can be used in expressions while echo has none
 * The echo statement can be used with or without parentheses: echo, echo()
 */

 //Example 1: echo usage
 echo "Example 1: echo usage\n\n";

 echo "a random phrase\n";
 echo "a ", "random ", "phrase\n";
 echo "<p>echo can also be used with html markup</p>\n";
 $text = "variables";
 echo "echo can also be used with ".$text."\n";
 echo "another example showing how echo can be used with $text\n";
 $a = 10;
 $b = 5;
 echo $a+$b;
 echo "\n";
 $t = "parameters";
 echo "example passing ", $t, " with echo\n";
 echo "\n";

 //Example 2: print usage
 echo "Example 2: print usage\n\n";

 print "a random phrase\n";
 print "<p>print can also be used with html markup</p>\n";
 print "print can also be used with ".$text."\n";
 print "another example showing how print can be used with $text\n";
 print $a+$b;
 print "\n";
 print "\n";

 //Data Types
 /**
  * PHP supports the following data types: 
  * * String - sequence of characters grouped by single or double quotes - e.g. "hello"
  * * Integer - an integer number is a non-decimal number between -2,147,483,648 and 2,147,483,647
  *             integers must have: at least one digit, must not have decimal points, can be either positive or negative
  *             integers can be specified in three formats: decimal (10-based). hexadecimal (16-based - prefixed with 0x)
  *             or octal (8-base prefixed with 0)
  * * Float (floating point numbers also known as double) - a number with a decimal point or a number in exponential form
  * * Boolean
  * * Array
  * * Object
  * * NULL
  * * Resource
  */

  //Example 3: Strings
  echo "Example 3: Strings\n\n";

  $a = "PHP";
  $b = "programming language";
  echo $a, " is a ", $b."\n";
  echo "\n";

  //Example 4: Integers
  echo "Example 4: Integers\n\n";

  $x = 3568;
  var_dump($x);
  echo "\n\n";

  //Example 5: Floats
  echo "Example 5: Floats\n\n";

  $f = 10.385;
  var_dump($f);
  echo "\n\n";

  //Example 6: Booleans
  echo "Example 6: Booleans\n\n";

  $_true = true;
  $_false = false;
  var_dump($_true);
  echo "\n";
  var_dump($_false);
  echo "\n\n";

  //Example 7: Arrays
  echo "Example 7: Array\n\n";

  $cars =  array('Fiat', 'Toyota', 'Volvo');
  var_dump($cars);
  echo "\n";

  //Example 8: Objects
  echo "Example 8: Objects\n\n";

  class Car {
      function Car($model){
          $this->model = $model;
      }
  }

  $car = new Car("BMW");
  var_dump($car);
  echo "\n";

  //Example 9: NULL Value
  echo "Example 9: NULL Value\n\n";

  $x=null;
  var_dump($x);
  echo "\n";

?>
