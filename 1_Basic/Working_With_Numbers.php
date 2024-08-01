<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Working with Numbers in PHP</title>
    <style>
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        h1 { color: #2c3e50; }
        p { font-size: 18px; }
        ul {line-height: 1.6;}
    </style>
</head>
<body>
    <h1>Number Types and Operations</h1>
        <ul>
            <li><strong>Integers:</strong> Whole numbers without a decimal point (e.g., 42).</li>
            <li><strong>Floating-Point Numbers:</strong> Numbers with a decimal point (e.g., 3.14).</li>
            <li><strong>Arithmetic Operations:</strong> Basic operations like addition, subtraction, multiplication, and division.</li>
            <li><strong>Rounding:</strong> Functions to round numbers to a specified number of decimal places.</li>
            <li><strong>Formatting:</strong> Functions to format numbers for display purposes.</li>
        </ul>
    <?php
    // Define some numbers
    $integer1 = 10;
    $integer2 = 5;
    $float1 = 7.5;
    $float2 = 2.3;

    // Arithmetic operations
    $sum = $integer1 + $integer2; // Addition
    $difference = $integer1 - $integer2; // Subtraction
    $product = $integer1 * $integer2; // Multiplication
    $quotient = $integer1 / $integer2; // Division

    // Rounding numbers
    $roundedFloat = round($float1, 1); // Round to 1 decimal place

    // Formatting numbers
    $formattedNumber = number_format($float1, 2); // Format with 2 decimal places

    // Display results
    echo "<h1>Number Operations in PHP => Operation Results</h1>";
    echo "<p>Sum- $sum</p>";
    echo "<p>Difference- $difference</p>";
    echo "<p>Product- $product</p>";
    echo "<p>Quotient- $quotient</p>";
    echo "<p>Rounded Float (1 decimal)- $roundedFloat  => (round($float1, 1)- Rounds $float1 to 1 decimal place.) </p>";
    echo "<p>Formatted Number (2 decimals)- $formattedNumber  => (number_format($float1, 2): Formats $float1 to 2 decimal places)</p>" ;
    ?>
</body>
</html>
