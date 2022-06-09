  <?php
  class A{

  }
  if (class_exists('A'))
  {
      echo'This class is exists';
  }
  else{
    echo'This class is not exists';
  }
  
  echo"<br>";
  //interface_exists

  interface abc{

  }
  if (interface_exists('abc'))
  {
      echo'This interface is exists';
  }
  else{
    echo'This interface is not exists';
  }

  echo"<br>";
  
  //method_exists

  class method{
   function demo()
   {

   }
}
$obj=new method();

if (method_exists($obj,'demo'))
{
    echo'This method is exists';
}
else
{
  echo'This method is not exists';
}


echo"<br>";
//trait_exists

trait text{

}
if (trait_exists('text'))
{
    echo'This trait is exists';
}
else{
  echo'This trait is not exists';
}

echo"<br>";

//property exist
class D{
    public $age;
}
if (property_exists('D','age'))
{
    echo'This property is exists';
}
else{
  echo'This property is not exists';
}

echo"<br>";

//is_a

class  first{
    //public $age;
}
$obj=new first();

if (is_a($obj,'first2'))
{
    echo'This object is exist in class first';
}
else{
  echo'This object is not exist in class first';
}

echo"<br>";

//is_sub_of

class  baseClass{
 
}
class  derive extends baseClass{
  
}
$obj=new derive();

if (is_subclass_of($obj,'baseClass1'))
{
    echo'This object is exist in subclass of baseClass';
}
else{
  echo'This  object is not exist insubclass of baseClass';
}
?>