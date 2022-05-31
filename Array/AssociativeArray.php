<!-- Associative arrays are arrays that use named keys that you assign to them -->
<?php
$profession=array('Rita'=>'Enginner','Rina'=>'Doctor','Rupa'=>'Police');
// single element display
echo"Rita is an ".$profession['Rita']."<br>";

// all element show
foreach($profession as $p=>$p_value)
{
    echo"Key= ".$p,", Value= ".$p_value;
    echo"<br>";
}
?>
