<!-- Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword.To access a static method use the class name,
 double colon (::), and the method name.Syntax:ClassName::staticMethod(); -->
<?php
class Foo{
    public static function A(){
        echo"Hiiiiiiiiiiiiii";
    }
}
Foo::A();
echo"<br>";

// A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)
class cal {
    public static function sum($a,$b){
      echo"Result : ". $a+$b;
    }
    public function __construct($c,$d)
    {
        self::sum($c,$d);
    }
}
new cal(12,33);

echo"<br>";
// To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

// class base {
//  public static $name='Hello Maam';
// }
// class derive extends base{
//     public static function show(){
//       echo parent::$name;
//     }

// }
// $obj=new derive();
// $obj->show();

class pi {
    public static $value=3.14159;
  }
  
  class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  echo"<br>";
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();
?>