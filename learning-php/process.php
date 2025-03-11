<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);

    // Validate form inputs
    if (empty($name) || !$age) {
        echo "<p style='color:red;'>Invalid input. Please try again.</p>";
        echo "<br><a href='index.php'>Go Back</a>";
        exit;
    }

    // Store data in session (simulating a database)
    if (!isset($_SESSION["users"])) {
        $_SESSION["users"] = [
            ["name" => "Conor", "age" => 26],
            ["name" => "Admin", "age" => 30],
            ["name" => "User", "age" => 22]
        ];
    }

    // Add new user
    $_SESSION["users"][] = ["name" => $name, "age" => $age];

    echo "<h2>Welcome, $name!</h2>";
    echo "<p>Your age is $age.</p>";

    echo "<h3>All Users:</h3>";
    foreach ($_SESSION["users"] as $user) {
        echo "<p>Name: " . $user["name"] . ", Age: " . $user["age"] . "</p>";
    }

    echo "<br><a href='index.php'>Go Back</a>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
