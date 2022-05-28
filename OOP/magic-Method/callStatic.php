<!-- __callStatic() is triggered when invoking inaccessible methods in a static context. -->
<?php
class A{
    private static  function follow(){
         echo"Static method";
    }

    public static function __callStatic($name, $arguments)
    {
      //execute static method
      
       if(method_exists(__CLASS__,$name))
       {
        call_user_func_array([__CLASS__,$name],$arguments);
    }
    else
        echo"This is a private static method..You cann't access";
    }

      //showing message instanted of fatal error
     //echo"This is a private method($name)..You can't access";
}
A::follow();


?>