<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- checkbox -->
<form action="" method="POST">
    <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
    <label><input type="checkbox" name="hobbies[]" value="Traveling"> Traveling</label>
    <label><input type="checkbox" name="hobbies[]" value="Cooking"> Cooking</label>
    <button type="submit">Submit</button>
</form>
<?php
$hobbies = $_POST['hobbies']; // Array of selected hobbies
foreach ($hobbies as $hobbie) {
    echo $hobbie;
}
?>

<!-- same as dropdown list -->
<!-- same as radio buttons -->
</body>

</html>