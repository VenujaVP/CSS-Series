<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Displaying PHP Variables in HTML</title>
    <style>
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 0px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        h2 { color: #2c3e50; }
        p { font-size: 18px; }
    </style>
</head>
<body>
    <?php
    // Defining variables
        $name = "Alice";       // String variable
        $age = 25;            // Integer variable
        $height = 5.7;        // Float variable
        $isStudent = true;    // Boolean variable

        // Displaying variables
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Height: " . $height . " feet<br>";
        echo "Is a student: " . ($isStudent ? "Yes" : "No") . "<br>";
    ?>

<p>PHP variables start with the dollar sign ($) followed by the variable name.</p>
<p>Variable names must start with a letter or an underscore, followed by any combination of letters, numbers, or underscores.</p>
<p>Variable names are case-sensitive, meaning $name and $Name are different variables.</p>

</body>
</html>
