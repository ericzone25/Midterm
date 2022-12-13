<?php
// PHP var
$var = "Variables";

//PHP echo
echo $var . '<br>';

//PHP data types
echo '<br>';
$name = "Ericson M. Guray Jr.";
$age = 22;
$single = true;
$grade = 74.5;
$null = NULL;
echo "Hi! My name is " . $name . " age " . $age . " my grade is " . $grade . " my grade: " . $grade . ' - ' . ' my age: ' . $age . ' = ' .  $grade - $age;

//PHP string 
echo '<br>';
$string = "Hello world";
echo $string . '<br>';
echo 'Hello World';

//PHP numbers
echo '<br>';
is_int($grade);

//PHP math
echo '<br>';
$num = 74.4;
echo round($num);

//PHP constants
echo '<br>';
define('Bird', 'Penguin' );
echo Bird;

//PHP operators
echo '<br>';
$num1 = 15;
$num2 = 29;
echo '<br>';

echo '13 + 19 = ' . $num1 + $num2. '<br>';
echo '14 - 26 = ' . $num1 - $num2. '<br>';
echo '32 * 76 = ' . $num1 * $num2. '<br>';
echo '45 / 66 = ' . $num1 / $num2. '<br>';
echo '12 % 55 = ' . $num1 % $num2. '<br>';


//PHP if...else..if
echo '<br>';
if ($name == "Ericson M. Guray Jr.") {
    echo $name;
} elseif ($age == 22){
    echo $age;
} else {
    echo 'Default';
}

//PHP switch
echo '<br>';
$birds = 'p';
switch ($birds) {
    case 'd';
        echo 'doggy';
    break;
    case 'c';
        echo 'pussy';
    break;

    case 'r';
        echo 'rabbit';
    break;
    default;
        echo "me";
}

//PHP loops
echo '<br>';
$n = 0;
while($n <= 5) {
  echo "The number is: $n <br>";
  $n++;
}

//PHP functions
echo '<br>';
function message($name) {
    echo $name;
}
message('Ericson M. Guray Jr.');