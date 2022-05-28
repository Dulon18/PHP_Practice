<!-- __set() is run when writing data to inaccessible (protected or private) or non-existing properties.

__get() is utilized for reading data from inaccessible (protected or private) or non-existing properties. -->


<?php
class A{
    private $age;
    public function show()
    {
        echo $this->age;
    }

    function __get($name)
    {
        echo"This is private property:$name";
    }
    function __set($name, $value)
    {
      if(property_exists($this,$name))
      {
          $this->$name=$value;

      }
      else
      {
        echo"Property daes not exists:$name";
      }
    }

}

$obj=new A();
$obj->age=33;
$obj->show();

?>