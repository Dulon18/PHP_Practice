<!-- The __invoke() method is called when a script tries to call an object as a function. -->
<?php
class A{
    public $a,$b;
    public function __construct($a,$b)
    {
       $this->a=$a;
       $this->b=$b;
    }
    public function multi()
    {
        echo $this->a * $this->b;
    }

    public function __invoke()
    {
        // echo $this->a * $this->b;
        echo' From inboke method';
    }
}
$obj=new A(22,45);
// echo $obj->multi();
$obj();

?>