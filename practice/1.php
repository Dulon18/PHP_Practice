 //Write a PHP program to swap two variables.

<?php
$a=23;
$b=44;
$c=$a;
echo "The number of a is $a" ;
echo "<br>";
echo "The number of b is $b" ;
echo "<br>";
echo "The number of c is $c" ;
?>



 //Write a PHP program to swap two variables without using third variable.

<?php
$a=23;
$b=44;

echo "\n Before swapping:  ".$a . ', ' . $b."\n";
echo "<br>";
list($a,$b) =array($b,$a);
echo "\n After swapping:  ". $a . ', ' . $b."\n";

?>
