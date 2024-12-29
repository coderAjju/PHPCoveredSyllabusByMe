<?php
// indexed array
$fruits = ["apple", "banana", "pineapple", "orange", "mango"];
$color = array("red", "blue", "yellow", "gray", "black");
// accessing array element
echo $fruits[0], "<br/>";
//iterate the array
foreach ($color as $col) {
    echo $col, "<br/>";
}

// associative array
$studentMarks = [
    "Rahul" => 90,
    "Suresh" => 85,
    "Ajay" => 99,
    "Shusmita" => 98,
];
// accessing array element
echo $studentMarks['Rahul'];
// iterate the associative array
foreach ($studentMarks as $name => $mark) {
    echo "<li>name of the student $name and mark is $mark</li>";
}

// mutlidimensional array
const matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
// accessing array element
echo matrix[2][1];

// ---- array built-in functions -----
echo "<br/> ";
echo count($studentMarks);
echo array_push($fruits, 1000);
foreach ($fruits as $fruit) {
    echo $fruit;
}


?>