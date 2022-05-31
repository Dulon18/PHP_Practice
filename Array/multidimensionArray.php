<!-- A multidimensional array is an array containing one or more arrays.
The dimension of an array indicates the number of indices you need to select an element.
            
            For a two-dimensional array you need two indices to select an element
            For a three-dimensional array you need three indices to select an element -->
<?php
$profession=array(
    array(
        'Rita','Engineer','Google'
    ),
    array(
        'Rina','Doctor','DMC'
    ),
    array(
        'Rita','Police','DMP'
    )
    );
echo $profession[0][0].' is an '.$profession[0][1].' at '.$profession[0][2]."<br>".$profession[1][0]
.' is a '.$profession[1][1].' at '.$profession[1][2]."<br>".$profession[2][0].' is a '.$profession[2][1].
' at '.$profession[2][2]
;
?>
echo"<br>";

// using for loop to display all

for($i=0;$i<3;$i++)
{
    echo "<p><b>Row number $i</b></p>";
    echo "<ul>"; 
    for($j=0;$j<3;$j++)
    {
   
        echo "<li>".$profession[$i][$j]."</li>";
    }
    echo "</ul>"; 
}
