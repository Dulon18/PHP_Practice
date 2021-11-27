<?php

 $s_name = $_POST['sname'];
 $s_address = $_POST['saddress'];
 $s_class = $_POST['class'];
 $s_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","curd") or die("Connection fail");
$sql ="INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$s_name}','{$s_address}','{$s_class }','{$s_phone}')";
$result = mysqli_query($conn, $sql) or die("query is not okey");

header("Loction: http://localhost/CURD/index.php");
echo "Successfully data added..";
mysqli_close($conn);
?>