<?php

 $s_id = $_POST['sid'];
 $s_name = $_POST['sname'];
 $s_address = $_POST['saddress'];
 $s_class = $_POST['sclass'];
 $s_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","curd") or die("Connection fail");
$sql ="UPDATE student SET sname = '{$s_name}',saddress= '{$s_address}',sclass ='{$s_class }',sphone ='{$s_phone}' WHERE sid='{$s_id}'";
$result = mysqli_query($conn, $sql) or die("query is not okey");
 
header("Loction: http://localhost/CURD/index.php");
echo "Successfully data Updated..";
mysqli_close($conn);
?>