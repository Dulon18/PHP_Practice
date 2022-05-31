    <!-- sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key -->
<?php

    $browser=array('Chrome','Opera','Firefox');

    //sort($browser); // sort arrays in ascending order
    rsort($browser); // sort arrays in descending order

    $a=count($browser);

    for($i=0;$i<$a;$i++)
    {
    echo $browser[$i]."<br>";
    }

    echo"<br>";

    $age = array("Peter"=>"37", "Ben"=>"25", "Joe"=>"43");

    //asort($age); // ascending Ordere according to the value
    //arsort($age); // decending Order according to the value

    ksort($age);   // according to the key

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }

?>
