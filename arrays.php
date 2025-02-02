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
?>
