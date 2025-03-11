<?php
session_start();

// Initialize users session if not set
if (!isset($_SESSION["users"])) {
    $_SESSION["users"] = [
        ["name" => "Conor", "age" => 26],
        ["name" => "Admin", "age" => 30],
        ["name" => "User", "age" => 22]
    ];
}

// Function to return a greeting based on age
function getGreeting($age) {
    if ($age >= 18) {
        return "You're an adult!";
    } elseif ($age >= 13) {
        return "You're a teenager!";
    } else {
        return "You're a child!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Interactive Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Enter Your Details</h2>
    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <hr>

    <h2>Registered Users</h2>
    <?php if (!empty($_SESSION["users"])): ?>
        <ul>
            <?php foreach ($_SESSION["users"] as $user): ?>
                <li>
                    <strong><?php echo htmlspecialchars($user["name"]); ?></strong> 
                    (<?php echo $user["age"]; ?> years old) - 
                    <?php echo getGreeting($user["age"]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No users registered yet.</p>
    <?php endif; ?>

</body>
</html>
