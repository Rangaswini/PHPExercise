<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// 1.  
echo "Hello World!";
// 2. 
$color = "red";
echo "My car is " . $color . "<br>";
//3
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt.$x.$y;
// 4.
print $x + $y;
// 5.
$x = 5985;
var_dump($x);
// 6.
echo strlen("Hello world!");
// 7.
echo str_word_count("Hello world!");
// 8
echo strrev("Hello world!");
//9
echo strpos("Hello world!", "l"); //o/p=>2
//10
echo str_replace("world", "Rango", "Hello world!");
//11
define("GREETING", "Gm");
echo GREETING;
//12 Concatenation assignment
$t1="hi";
$t2="rang";
$t1 .= $t2;
echo $t1;
//13 
$t = 2;

if ($t < 5) {
    echo "Have a good day!";
}
//14 switch
$favcolor = "black";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//15
$x = 0; 

while($x <= 2) {
    echo "The number is: $x <br>";
    $x++;
} 
//16
$xx = 6;

do {
    echo "The number is: $xx <br>";
    
} while ($xx <= 5);

//17
for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
} 
//18 foreach
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
//19function
function msg() {
   echo "Rangaswini";
}
msg(); 
//20
function msgName($name, $nickname="no nick name") {
   echo "$name => $nickname <br>";
}
msgName("Rangaswini", "Rango");
function returnFun($a,$b=0) {
   return $a+$b;
}
echo"function_returning_addition=>".returnFun(3,4);
//21 Array
//Index array
$color = array("pink", "blue", "white");
echo $color[0];
echo count($color);//length
//Associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo"Age of Ben =>".$age['Ben'];

foreach($age as $x => $x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
sort($color);
for($x = 0; $x < count($color); $x++) {
   echo $color[$x];
}
rsort($color);
asort($age);
ksort($age);
arsort($age) ;
krsort($age);

//22 Global and Superglobal
$var1=2;
$var2=3;
function addition() { 
   $GLOBALS['z'] = $GLOBALS['var1'] + $GLOBALS['var2']; 
}

addition(); 
echo $z; 
//
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>



</body>
</html>