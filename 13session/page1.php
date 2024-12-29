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
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) || empty($_POST['email'])) {
            echo "all field required";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            echo "<h1>User information</h1>";
            echo "<h2>Name: $name </h2>";
            echo "<h2>Email: $email </h2>";
        }
    }
    session_start();
    $_SESSION['name'] = ucwords($name);
    $_SESSION['email'] = $email;
    ?>

    <form action="page2.php" method="get">
        <button type="submit">Next</button>
    </form>
</body>

</html>