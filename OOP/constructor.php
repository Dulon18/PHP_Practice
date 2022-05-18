<?php
 class personInfo{
     public $name,$address,$age,$profession;
     function __construct($a,$b,$c,$d)
     {
         $this->name=$a;
         $this->address=$b;
         $this->age=$c;
         $this->profession=$d;
     }
     function show()
     {
         echo '<h2>Personal info : </h2>'.'Name : '.$this->name.'<br>'.'Address : '
           .$this->address.'<br>'.'Age : '.$this->age.'<br>'.'Profession : '.$this->profession;
     }
 }
 $obj=new personInfo('Rahim','Dhaka',23,'Engineer');
 $obj->show();
?>
