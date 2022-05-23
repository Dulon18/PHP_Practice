<?php
    interface A
    {
        function sum($a,$b);
    
    }

    interface B
    {
      function sub($a,$b);
    
    }

class C implements A,B
{
    function sum($a,$b){
       return $a+$b;
    }
    function sub($a,$b){
        return $a-$b;
     }
}
$obj=new C();
echo $obj->sum(12,13);
echo "<br>";
echo $obj->sub(12,13);

?>