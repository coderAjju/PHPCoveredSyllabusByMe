<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- # basic embedding -->
    <h1>Welcome to my website</h1>
    <p>
        Today's date is : <?php echo date('d-m-y') ?>
    </p>

    <!-- // variable embedding -->
    <?php
    $name = "Ajay";
    $greeting = "Hello, $name welcome to my website";
    ?>

    <h1 style=""><?php echo $greeting ?></h1>

    <!-- // loops -->
    <?php
    $fruits = ["apple", "banana", "pineapple", "orange"];
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    ?>

</body>

</html>