<?php
class sum{
    function add(int $a,int $b)
    {
        return  $a+$b;
    }
    function sub(int $a,int $b)
    {
        return  $a-$b;
    }
}
$obj=new sum();
echo 'Result : '.$obj->add(1,3).'<br>';
echo 'Result : '.$obj->sub(6,3);
?>
