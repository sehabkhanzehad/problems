<?php

// Problem No: 01
echo "<h1>Problem no: 01<br></h1>";
$number = 56;
echo "Your value is: ", $number, "<br><br>";

// Problem No: 02
echo "<h1>Problem no: 02<br></h1>";
$country_name = strrev("Bangladesh!");
echo "Value that you provided looks like in reverse like this: ", $country_name, "<br><br>";

// Problem No: 03
echo "<h1>Problem no: 03<br></h1>";
$string = "Hello Bangladesh!";
echo str_replace("Bangladesh!", "CIT", "$string");
echo "<br><br>";

// Problem No: 04
echo "<h1>Problem no: 04<br></h1>";
define("PI", 22/7);
echo "Constant value of PI is: ", PI;
echo "<br><br>";

// Problem No: 05
echo "<h1>Problem no: 05<br></h1>";
$num1 = 54;
$num2 = 38;
$addition = $num1 + $num2;
$Multiplication = $num1 * $num2;
$Division = $num1 / $num2;
$Subtraction = $num1 - $num2;

echo "Addition of two values: ($addition)<br>";
echo "Multiplication of two values: #$Multiplication#<br>";
echo "Division of two values: $Division<br>";
echo "Subtraction of two values: $$Subtraction";

// Problem No: 06
echo "<h1>Problem no: 06<br></h1>";
$n1 = 43;
$n2 = 5;
$mod = 43 % 5 ;
echo "Remainder is $mod";

// Problem No: 07
echo "<h1>Problem no: 07<br></h1>";
$gender = "male";
if ($gender == "male"){

  if ($gender == "female"){
    echo "You are a female";
  }

  echo "You are a male";
}


// Problem No: 08
echo "<h1>Problem no: 08<br></h1>";

$int = 38;
if($int % 2 == 0){
  echo $int, " is even";
}

// Problem No: 09
echo "<h1>Problem no: 09<br></h1>";
$x = 1;

while($x <= 10) {
  echo "$x#";
  $x++;
}

// Problem No: 10
echo "<h1>Problem no: 10<br></h1>";

$letter = "a";
switch ($letter) {
  case ($letter == "a" || $letter == "e" || $letter == "i" || $letter == "o" || $letter == "u"):
  echo "Your input is a vowel";
  break;

  case ($letter == "b" || $letter == "c" || $letter == "d" || $letter == "j" || $letter == "f" || $letter == "g" || $letter == "h" || $letter == "k" || $letter == "l" || $letter == "m" || $letter == "n" || $letter == "p" || $letter == "q" || $letter == "r" || $letter == "s" || $letter == "t" || $letter == "v" || $letter == "w" || $letter == "x" || $letter == "y" || $letter == "z"):
  echo "Your input is a consonant";
  break;

  default:
  echo "Your input is an invalid";
}

// Problem No: 11
echo "<h1>Problem no: 11<br></h1>";
for($i = 1;$i <= 10; $i++){
  
  if($i % 2 == 0){

    echo $i, "@";
    }
  }



// Problem No: 12
echo "<h1>Problem no: 11<br></h1>";
for($i = 1;$i <= 10; $i++){
  
  if($i % 2 == 1){

    echo $i, "<br>";
    }
  }


// Problem No: 12
echo "<h1>Problem no: 13<br></h1>";

$num = 1;
    for($i = 1; $i <= 10; $i++){        
      $result = $num * $i;
        echo "$num * $i = $result <br>";      
    }
echo "<br>";
echo "<br>";


// Problem No: 12
echo "<h1>Problem no: 14<br></h1>";



function check_number($x){

  if($x>10){
    if($x>20){
       if($x<30){

           echo"$x is less than 30.<br>" ;
       }
       echo "$x is greater than 20.<br>";
    }
   echo "$x is greater than 10.<br>";
  }
}

check_number(25);