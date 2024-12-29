<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <?php
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Retrieve form data
        $name = $_GET['name'];
        $email = $_GET['email'];

        // Display the form data
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    }
    ?>

    <!-- HTML Form -->
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Submit</button>
    </form>


</body>

</html>