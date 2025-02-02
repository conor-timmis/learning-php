<?php
    // Indexed Array
    $fruits = ["Apple", "Banana", "Cherry"];

    echo "Indexed Array:<br>";
    echo $fruits[0];  // Output: Apple
    echo "<br>";
    echo $fruits[1];  // Output: Banana
    echo "<br>";
    
    // Adding an element to the indexed array
    $fruits[] = "Orange";
    echo $fruits[3];
    echo "<br><br>";
    
    // Associative Array
    $person = [
        "name" => "Conor",
        "age" => 26,
        "city" => "United Kingdom"
    ];

    echo "Associative Array:<br>";
    echo $person["name"];  // "Conor"
    echo "<br>";
    echo $person["age"];   // "26"
    echo "<br><br>";

    // Multidimensional Array
    $students = [
        ["name" => "User", "age" => 18],
        ["name" => "Guy", "age" => 22],
        ["name" => "Man", "age" => 21]
    ];

    echo "Multidimensional Array:<br>";
    echo $students[0]["name"];  // "User"
    echo "<br>";
    echo $students[1]["age"];   // "22"
    echo "<br><br>";

    // Common Array Functions
    $fruits = ["Apple", "Banana", "Cherry"];
    
    // Count function
    echo "Count function:<br>";
    echo count($fruits);  // "3"
    echo "<br><br>";

    // Array_push function
    array_push($fruits, "Orange", "Grapes");
    echo "Array_push function:<br>";
    print_r($fruits);  // Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange [4] => Grapes )
    echo "<br><br>";

    // Array_pop function
    array_pop($fruits);
    echo "Array_pop function:<br>";
    print_r($fruits);  // Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange )
    echo "<br><br>";

    // In_array function
    echo "In_array function:<br>";
    if (in_array("Banana", $fruits)) {
        echo "Banana is in the array!<br>";
    }
    if (!in_array("Grapes", $fruits)) {
        echo "Grapes is not in the array!<br>";
    }
?>
