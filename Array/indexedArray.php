<!-- An array stores multiple values in one single variable
In PHP, the array() function is used to create an array
there are three types of arrays:
    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays -->

<?php
$car=array('BMW','Toyota','Tata','Marindha','Volvo');

// print particular element
echo $car[4]."<br>";

// The count() function is used to return the length (the number of elements) of an array
echo" Total Element: ". count($car)."<br>";

//print all element
$a=count($car);
echo "Cars are: "."<br>";
for($i=0;$i<$a;$i++)
{
    echo($car[$i])."<br>";
}

?>
