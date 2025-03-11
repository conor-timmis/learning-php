<?php
// Indexed Array
$fruits = ["Apple", "Banana", "Cherry"];

echo "<h3>Indexed Array:</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Adding an element to the indexed array
$fruits[] = "Orange";
echo "Added a new fruit: " . $fruits[3] . "<br><br>";

// Associative Array
$person = [
    "name" => "Conor",
    "age" => 26,
    "city" => "United Kingdom"
];

echo "<h3>Associative Array:</h3>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
echo "<br>";

// Multidimensional Array
$students = [
    ["name" => "User", "age" => 18],
    ["name" => "Guy", "age" => 22],
    ["name" => "Man", "age" => 21]
];

echo "<h3>Multidimensional Array:</h3>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . "<br>";
}
echo "<br>";

// Sorting Arrays
$numbers = [5, 2, 9, 1, 7];

echo "<h3>Sorting Functions:</h3>";
sort($numbers); // Ascending
echo "Ascending Sort: " . implode(", ", $numbers) . "<br>";

rsort($numbers); // Descending
echo "Descending Sort: " . implode(", ", $numbers) . "<br>";

$people = ["John" => 30, "Alice" => 25, "Bob" => 35];
asort($people); // Sort by values (ascending)
echo "Associative Array Sorted by Age: ";
print_r($people);
echo "<br>";

ksort($people); // Sort by keys
echo "Associative Array Sorted by Name: ";
print_r($people);
echo "<br><br>";

// Merging Arrays
$more_fruits = ["Grapes", "Mango"];
$all_fruits = array_merge($fruits, $more_fruits);

echo "<h3>Merged Arrays:</h3>";
print_r($all_fruits);
echo "<br><br>";

// Slicing Arrays
$sliced_fruits = array_slice($all_fruits, 1, 3);
echo "<h3>Array Slice (Elements 1 to 3):</h3>";
print_r($sliced_fruits);
echo "<br><br>";

// Using array_map (double each number)
$numbers = [1, 2, 3, 4, 5];
$doubled_numbers = array_map(fn($n) => $n * 2, $numbers);

echo "<h3>Array Map (Doubled Numbers):</h3>";
print_r($doubled_numbers);
echo "<br><br>";

// Using array_filter (filter out odd numbers)
$even_numbers = array_filter($numbers, fn($n) => $n % 2 == 0);

echo "<h3>Array Filter (Even Numbers Only):</h3>";
print_r($even_numbers);
echo "<br><br>";

// Using array_reduce (sum up all numbers)
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0);

echo "<h3>Array Reduce (Sum of Numbers):</h3>";
echo "Total Sum: $sum";
?>
