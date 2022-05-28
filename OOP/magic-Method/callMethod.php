<!-- __call() is triggered when invoking inaccessible methods in an object context. -->
<?php

class A{
    private $phone1,$phone2;
    
    private function show($p1,$p2)
    {
        $this->phone1=$p1;
        $this->phone2=$p2;

    }
    function __call($name, $arguments)
    {
        if(method_exists($this,$name))
        {
            call_user_func_array([$this,$name],$arguments);
        }
        else{
            echo"This is a private method($name)..You can't access";
        }

        //showing message

        //echo"This is a private method($name)..You can't access";
  
    }

}
$obj=new A();
echo $obj->show('iphone','Nokia');
?>