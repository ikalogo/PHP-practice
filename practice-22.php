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
  * * Integer
  * * Float (floating point numbers also known as double)
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

?>
