<?php
// If-Elseif-Else Statement
$age = 16;

if ($age >= 18) {
    echo "You are an adult.<br>";
} elseif ($age >= 13) {
    echo "You are a teenager.<br>";
} else {
    echo "You are a child.<br>";
}

// Ternary Operator (Shorter If-Else)
$status = ($age >= 18) ? "Adult" : "Not an adult";
echo "Status: $status<br>";

// Switch Statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!<br>";
        break;
    case "Friday":
        echo "Almost the weekend!<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!<br>";
        break;
    default:
        echo "Just another day!<br>";
}

// Match Expression (Alternative to Switch - PHP 8+)
$weather = "sunny";
$activity = match ($weather) {
    "rainy" => "Stay inside",
    "sunny" => "Go for a walk",
    "cloudy" => "Read a book",
    default => "Do whatever you like"
};
echo "Activity: $activity<br>";

// For Loop
echo "<h3>For Loop:</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
}

// While Loop
echo "<h3>While Loop:</h3>";
$i = 1;
while ($i <= 5) {
    echo "While loop iteration $i<br>";
    $i++;
}

// Do-While Loop (Executes at least once)
echo "<h3>Do-While Loop:</h3>";
$j = 1;
do {
    echo "Do-While iteration $j<br>";
    $j++;
} while ($j <= 5);

// Foreach Loop
$fruits = ["Apple", "Banana", "Cherry"];
echo "<h3>Foreach Loop:</h3>";
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}

// Foreach with Key-Value Pairs
$person = ["name" => "Alice", "age" => 25, "city" => "London"];
echo "<h3>Foreach with Key-Value Pairs:</h3>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}
?>
