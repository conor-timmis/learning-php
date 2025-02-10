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

</body>
</html>