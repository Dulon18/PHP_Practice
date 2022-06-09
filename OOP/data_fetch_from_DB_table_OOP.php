<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection Failed ".$conn->connect_error);
}

$sql="SELECT * FROM student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 
    while($row = $result->fetch_assoc())
    {
        echo"ID : {$row['id']} - Name : {$row['name']} ||
         Department:{$row['department']} || 
         Course : {$row['course']} ||
         Email : {$row['email']} ||
         <br>";
    }
}
else{
    echo "Result Not found..";
}

?>