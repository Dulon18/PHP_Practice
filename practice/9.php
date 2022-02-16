//Write a PHP program to print out the multiplication table up to 6*6. Go to the editor


<!DOCTYPE html>
<html>
<body>
<table align="left">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";

for ($j=1;$j<=6;$j++)
  {
  
  echo "<td>".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>  

</body>
</html>
