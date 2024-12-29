<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="enter your name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="enter your email">
        <button type="submit">submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['name']) || empty($_POST['email'])) {
            echo "All field are required";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "<h1>User Information</h1>";
            echo "<h2>name: $name</h2>";
            echo "<h2>email: $email</h2>";

            setcookie("username", $name);
            setcookie("email", $email);
        }
    }
    ?>

    <form action="page2.php" method="post">
        <button type="submit">Submit</button>
    </form>
</body>

</html>