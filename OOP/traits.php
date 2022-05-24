<!-- Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, 
and the methods can have any access modifier (public, private, or protected). -->

<?php
trait test //Traits are declared with the trait keyword
{
    function message()
    {
        echo"Hii...";
    }
}

trait test2
{
    function hello()
    {
        echo"Everyone...";
    }
    function Bye()
    {
        echo"Everyone...";
    }
}
class A{
    use test,test2; // To use a trait in a class, use the 'use' keyword
}
class B{
    use test,test2;
}

$objA=new A();
$objB=new B();
$objA->message();
$objA->hello();
echo"<br>";
$objB->message();
$objB->Bye();
?>