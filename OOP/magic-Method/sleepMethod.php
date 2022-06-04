<!-- The intended use of __sleep() is to commit pending data or perform similar cleanup tasks. 
Also, the function is useful if a very large objects doesn't need to be saved completely. -->
<?php

class info{
    public $name = "David";
    public $city="USA";
    function __sleep()
    {
        return array("name");
    }
}
$obj=new info();
$a=serialize($obj);
echo $a;


?>