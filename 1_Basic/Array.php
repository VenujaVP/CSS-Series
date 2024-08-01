<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Working with Arrays in PHP</title>
    <style>        
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        h1 { color: #2c3e50; }
        ul { list-style-type: none; }
        li { font-size: 18px; }
    </style>
</head>
<body>
    <?php
    // Indexed Array
    $fruits = array("Apple", "Banana", "Cherry");
    
    // Associative Array
    $person = array(
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
    );
    
    // Multidimensional Array
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    // Display Indexed Array
    echo "<h1>Indexed Array</h1>";
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    echo "Item show in Index 0 = ", $fruits[0];

    // Display Associative Array
    echo "<h1>Associative Array</h1>";
    echo "<p>First Name- " . $person["first_name"] . "</p>";
    echo "<p>Last Name- " . $person["last_name"] . "</p>";
    echo "<p>Age- " . $person["age"] . "</p>";

    // Display Multidimensional Array
    echo "<h1>Multidimensional Array</h1>";
    echo "<ul>";
    foreach ($matrix as $row) {
        echo "<li>" . implode(", ", $row) . "</li>";
    }
    echo "</ul>";echo "Item show in Index First Row(Index 0), Second Element(index 1) =", $matrix[0][1] ;
    ?>
</body>
</html>
