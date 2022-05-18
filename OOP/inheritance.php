 <?php
class employee{
        public $name,$age,$salary;
        function __construct($a,$b,$c)
        {
            $this->name=$a;
            $this->age=$b;
            $this->salary=$c;
        }
        function show()
        {
            echo '<h2>Employee info : </h2>'.'Name : '.$this->name.'<br>'
            .'Age : '.$this->age.'<br>'.'Salary : '.$this->salary;
        }
    }
    class engineer extends employee{
             public $travel_allowrance=1000;
             public $internent_free=2000;
             public $total_salary;
             function show(){
                 $this->total_salary=$this->salary+$this->travel_allowrance+$this->internent_free;
                 echo '<h2>Engineer info : </h2>'.'Name : '.$this->name.'<br>'
            .'Age : '.$this->age.'<br>'.'Salary : '.$this->total_salary;
             }
    }
    $obj=new employee('Karim',26,1000);
    $obj2=new engineer('Raju',24,2000);
    $obj->show();
    $obj2->show()
 ?>
