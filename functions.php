<?php
  // Define the function
  function sayHello() {
      echo "Hello, World!<br>";
  }

  // Call the function
  sayHello();

    // Define a function with parameters
    function greet($name) {
        echo "Hello, $name!<br>";
    }

    // Call the function with an argument
    greet("Admin");
    greet("User");

    // Define a function that returns a value
    function add($a, $b) {
        return $a + $b;
    }

    // Call the function and store the result
    $sum = add(5, 3);
    echo "The sum is: $sum<br>";

    // Define a function with a default parameter value
    function greet($name = "Guest") {
        echo "Hello, $name!<br>";
    }

    // Call the function without arguments
    greet();

    // Call the function with an argument
    greet("User");
?>
