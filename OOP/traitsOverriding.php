
<?php
trait test{
    function helllo()
    {
        echo "hello";
    }
}
class A{
    use test;
    function helllo()
    {
        echo "hello from A class";
    }
}
class B extends A{
 
    function helllo()
    {
  
        echo "hello from extends";
    }
}
$obj=new B();
$obj->helllo()
?>