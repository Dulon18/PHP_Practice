<!-- The __toString() method allows a class to decide how it will react when it is treated like a string. -->

<?php
class B{

    function __toString()
    {
        return "Cann't print object as a string of class:".get_class($this);
    }
}
$obj=new B();
echo $obj;
?>