<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // for loop
    for ($i = 0; $i < 5; $i++) {
        echo "for loop $i <br/>";
    }

    // while loop
    $num = 5;
    while ($num) {
        echo "while loop $num <br/>";
        $num--;
    }
    // do while loop
    $count = 1;
    do {
        echo "Count is: $count<br>";
        $count++;
    } while ($count <= 5);

    ?>
</body>

</html>