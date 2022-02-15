// Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false.

<?php
$a=407;
$sum=0;
$temp=$a;
while($temp!=0)
{
    $r=$temp%10;
    $sum=$sum+$r*$r*$r;
    $temp=$temp/10;
}
if($a==$sum)
{
    echo "This is a Armstrong number or True";
}
else
{
    echo "This is not a Armstrong number or False";
}

?>
