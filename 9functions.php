<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //user defined function && function argument: call by value
    function add($num1, $num2)
    {
        return $num1 + $num2;
    }
    $total = add(10, 20);
    echo "total $total <br/>";

    // built-in function
    $str = "ajay upadhyay";
    echo strlen($str) . "<br/>";

    #function argument: call by reference
    function car($name, &$model)
    {
        $model = "A5";
    }
    $name = "audi";
    $model = "A4";
    car($name, $model);
    echo $model;

    ?>
</body>

</html>