<!-- PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance. -->

<?php
class A{
    protected static $name='Hello People';
    public function show()
    {
        echo self::$name;
        echo "<br>";
        echo static::$name; // Here comes Late Static Bindings
    }
}
class B extends A{
    protected static $name='Hello Cutie';
}
$obj = new B();
$obj->show();
echo "<br>";

// get_called_class — The "Late Static Binding" class name
class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();
bar::test();

?>

