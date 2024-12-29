<?php
//local variable
function add()
{
    $num1 = 10;
    $num2 = 20;
    return $num1 + $num2;
}
$total = add();
echo $total;
// php ke andar jo local scope hota hai variable ka wo kewal ussi function ke andar accessible hota hai, hum usko bahar se access nhi kar sakte

?>


<?php
//global variable
$age = 18;
function EligibleForDriving()
{
    global $age;
    if ($age >= 18) {
        echo "you can drive the car";
    }
}
EligibleForDriving();
?>

<?php
//static variable
function sub()
{
    static $count = 0;
    $count++;
    echo $count;
}
sub();
sub();
sub();
?>

<?php
echo "<br/>";
define("name", "ajay");
const isbool = true;
echo isbool, "<br/>";
echo name;
?>