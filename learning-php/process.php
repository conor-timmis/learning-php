<?php
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get form data
      $name = $_POST['name'];
      $age = $_POST['age'];

      // Store data in an array (simulating a database)
      $users = [
          ["name" => "Conor", "age" => 26],
          ["name" => "Admin", "age" => 30],
          ["name" => "User", "age" => 22]
      ];

      // Add new user to the array
      $users[] = ["name" => $name, "age" => $age];

      echo "<h2>Welcome, $name!</h2>";
      echo "<p>Your age is $age.</p>";

      echo "<h3>All Users:</h3>";
      foreach ($users as $user) {
          echo "<p>Name: " . $user["name"] . ", Age: " . $user["age"] . "</p>";
      }

      echo "<br><a href='index.php'>Go Back</a>";
  } else {
      echo "<p>Invalid request.</p>";
  }
?>
