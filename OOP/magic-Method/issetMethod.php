<!-- __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties. -->
<!-- isset() — Determine if a variable is declared and is different than null -->


<?php
class employee{
    public $name;
    private $salary;
    public function info($a)
    {
        $this->salary=$a;
    }

    public function __isset($property)
    {
        echo isset($this->$property);
    }
}
$obj=new employee();
//echo $obj->name='Rafiq';
$obj->info=1000;
echo isset($obj->salary)

?>