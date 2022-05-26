<!-- 1. Magic methods are special methods which override PHP's default's action 
when certain actions are performed on an object.

2.The following method names are considered magical: __construct(), __destruct(),
 __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(),__autoload(), 
 __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and  __debugInfo(). -->

<?php
//__construct and __destruct() method...
class A{
    function __construct()
    {
        echo"This is form construct function"."<br>";
    }
    function Show()
    {
        echo"This is form show function"."<br>";
    }
    function __destruct()
    {
        echo"This is form destruct function";
    }

}
$test = new A();
 $test->Show();
?>
