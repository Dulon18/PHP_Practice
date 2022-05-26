<!--__get() is utilized for reading data from inaccessible (protected or private) or non-existing properties. -->

<?php
class A{
    private $info=["name"=>"Rahim","age"=>"22","city"=>"Dhaka"];

   public  function  __get($key)
    {
       if(array_key_exists($key,$this->info))
       {
           return $this->info[$key];
       }
       else{
           return "This key ($key) is not defined";
       }
    }
}
$obj=new A();
echo $obj->name.'<br>'.$obj->age.'<br>'.$obj->city;
echo"<br>";
echo $obj->address;
?>
