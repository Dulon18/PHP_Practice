<!-- An abstract class is a class that contains at least one abstract method.
An abstract method is a method that is declared, but not implemented in the code.
An abstract class or method is defined with the abstract keyword -->

<?php
abstract class base{
    abstract protected function sum($a,$b);
    abstract protected function sub($a,$b);
}

class derived extends base{
    public function sum($a,$b)
    {
        return $a+$b;
    }
    public function sub($a,$b)
    {
        return $a-$b;
    }
}
$obj=new derived();
echo 'Result of sum : '.$obj->sum(122,22);
echo"<br>";
echo 'Result of sub : '.$obj->sub(122,22);
?>