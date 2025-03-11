<?php
// Basic Function
function sayHello() {
    echo "Hello, World!<br>";
}

// Call the function
sayHello();

// Function with parameters
function greet($name) {
    echo "Hello, $name!<br>";
}

// Call function with arguments
greet("Admin");
greet("User");

// Function with return value
function add($a, $b) {
    return $a + $b;
}

$sum = add(5, 3);
echo "The sum is: $sum<br>";

// Function with default parameter
function greetUser($name = "Guest") {
    echo "Hello, $name!<br>";
}

// Call function without and with arguments
greetUser();
greetUser("User");

// Function with multiple optional parameters
function introduce($name, $age = 18, $city = "Unknown") {
    echo "Hi, I'm $name, $age years old from $city.<br>";
}

// Calls with different arguments
introduce("Alice");
introduce("Bob", 25);
introduce("Charlie", 30, "London");

// Function Overloading (via argument count handling)
function multiply(...$numbers) {
    return array_product($numbers);
}

echo "Product: " . multiply(2, 3) . "<br>";         // 6
echo "Product: " . multiply(2, 3, 4) . "<br>";      // 24
echo "Product: " . multiply(2, 3, 4, 5) . "<br>";   // 120

// Variable Scope: Local, Global, and Static
$globalVar = "I'm global!";

function testScope() {
    global $globalVar; // Access global variable
    static $counter = 0; // Static variable retains value between calls
    $localVar = "I'm local!";
    
    echo "$globalVar | $localVar | Counter: $counter <br>";
    $counter++;
}

testScope();
testScope();
testScope();

// Anonymous Function (Closure)
$double = function($num) {
    return $num * 2;
};

echo "Double of 4: " . $double(4) . "<br>";

// Using a Closure with array_map
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map(fn($num) => $num * 2, $numbers);

echo "Doubled Array: " . implode(", ", $doubledNumbers) . "<br>";

// Recursive Function (Factorial Calculation)
function factorial($n) {
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}

echo "Factorial of 5: " . factorial(5) . "<br>";

// Strict Typing and Type Hints
declare(strict_types=1);

function subtract(int $a, int $b): int {
    return $a - $b;
}

echo "Subtraction Result: " . subtract(10, 4) . "<br>";

// Function using strict return type
function divide(float $a, float $b): float {
    if ($b == 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $a / $b;
}

try {
    echo "Division Result: " . divide(10, 2) . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
