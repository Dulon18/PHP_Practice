<!-- Access Modifier 3 types: public,protected,private
public->use->class itself,outside class,Derive class
protected->use->class itself,Derive class
private->use->class itself -->
<?php
class parentClass{
 public $name;
 protected $age;
 private $adress;
 public function __construct($a,$b,$c)
 {
     $this->name=$a;
     $this->age=$b;
     $this->address=$c;
 }

 public function get()
 {
     echo "<h2>From parent class :</h2>";
    echo "Name : ".$this->name.'<br>';
     echo "Age : ".$this->age.'<br>';
     echo "Address : ".$this->address.'<br>';
 }
}
class child extends parentClass{
    public function show()
    {
        echo "<h2>From child class :</h2>";
        echo "Name : ".$this->name.'<br>';
        echo "Age : ".$this->age.'<br>';
        echo "Address : ".$this->address;
    }
}
$obj=new parentClass('Rina',22,'Dhaka');
$child=new child('Rikii',23,'Tongi');
// $obj->address='Gazipure';
$obj->get();
$child->address='Gazipure';
$child->show();

?>