<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Working with Strings in PHP</title>
    <style>
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        h1 { color: #2c3e50; }
        p { font-size: 18px; }

    </style>
</head>
<body>
    <?php
    // Define some strings
    $greeting = "Hello";
    $name = "Alice";
    $sentence = $greeting . ", " . $name . "!"; // Concatenation

    // Display the concatenated string
    echo "<h1>String Operations in PHP</h1>";
    echo "<p>Greeting: $sentence</p>";

    // Length of the string
    $length = strlen($sentence);
    echo "<p>Length of the string: $length characters</p>";

    // Extract a substring
    $substring = substr($sentence, 0, 5); // Extracts "Hello"
    echo "<p>Substring: $substring => (extracts a substring starting at index 0 with a length of 5 characters.)</p>";

    // Convert to uppercase
    $uppercase = strtoupper($sentence);
    echo "<p>Uppercase: $uppercase</p>";

    // Convert to lowercase
    $lowercase = strtolower($sentence);
    echo "<p>Lowercase: $lowercase</p>";
    ?>
</body>
</html>
