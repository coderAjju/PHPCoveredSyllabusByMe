<?php
$num = 10;
$float = 101.3;
$str = "ajay";
$bool = true;
$array = [12, 43, 4, 34, 55];
// object
class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
$myCar = new Car("Audi");
echo $myCar->name, "<br/>";

// here are some built-in function that helps to check the data type of variable
/*
is_int();
is_float();
is_string();
is_bool()
is_array()
*/
if (is_float($float)) {
    echo "float num";
} else {
    echo "not a float num";
}
?>