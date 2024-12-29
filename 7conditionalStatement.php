<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if else statement
    $age = 18;
    if ($age >= 18) {
        echo "yes,you can drive";
    } else {
        echo "no,you can't drive";
    }

    // switch statement
    $choice = 3;
    switch ($choice) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        default:
            echo "no match found";
    }
    ?>
</body>

</html>