<!-- Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class -->

<?php
require "first.php";
require "second.php";
function hello()
{
    echo "this is from main file<br> ";
}
$obj=new second\A();
$obj=new first\A();
hello();

?>