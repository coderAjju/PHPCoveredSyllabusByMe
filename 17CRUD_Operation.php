<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userData";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql = "create table employee (id INT, name VARCHAR(50), email VARCHAR(100))";
// $sql = "ALTER TABLE employee MODIFY COLUMN name VARCHAR(100)";
$sql = "INSERT INTO employee (id,name,email) values (2,'suresh','suresh@gmail.com')";
// $sql = 'Update employee set name="ajay" where id = 1';
// $sql = "delete from employee where id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Table altered successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}


// --------- fetching records from db -------------
// $sql = "SELECT * FROM employee WHERE id = 1";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     $arr = $result->fetch_assoc();
//     echo $arr["id"] . " " . $arr["name"] . " " . $arr["email"];
// }

$conn->close();
?>