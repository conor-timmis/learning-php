<?php
  // Elseif statement
  $age = 16;

  if ($age >= 18) {
      echo "You are an adult.";
  } elseif ($age >= 13) {
      echo "You are a teenager.";
  } else {
      echo "You are a child.";
  }

    // Switch statement
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the week!<br>";
            break;
        case "Friday":
            echo "Almost the weekend!<br>";
            break;
        default:
            echo "Just another day!<br>";
    }

    // For loop
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration $i<br>";
    }

    // While loop
    $i = 1;
    while ($i <= 5) {
        echo "While loop iteration $i<br>";
        $i++;
    }
?>
