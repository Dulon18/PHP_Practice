<?php
$currentTime= time();
echo $currentTime.'<br>';
echo $currentTime+5*24*60*60;
echo"<br>";

echo date('m/d/y g:ia');

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<!-- &copy; 2010-<?php echo date("Y");?> -->

<?php
echo "The time is " . date("h:i:sa");
date_default_timezone_set('UTC');
echo $currentTime.'<br>';
echo date('m/d/Y g:ia',$currentTime+5*24*60*60);
echo"<br>";
echo date('m/d/Y', strtotime('first day of june'));
echo"<br>";
// with hour as a 24-hour format-> date("H:i:s")
echo(date("H:i:s"))."<br>";
//date("l") means the weekday of today
echo(date("l"))
?> 