<?php
echo "1.Save the above code in a file named index.php.", "<br>";
echo "2.Place the index.php file in your web server's root directory (e.g., htdocs folder XAMPP mail directory","<br>"; 
echo"3.Open your web browser and navigate to http://localhost/index.php.","<br>"; 
echo"4.Make Sure XAMPP software install user computer and start Apache and MySql serwers.","<br>"; 
echo"5.Enter your name in the form and submit it. The page will display a greeting message with your name.", "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP in HTML Example</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px;background: linear-gradient(to top, #ffcccc, #cc99ff); }
        form { background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; max-width: 100%; }
        label { display: block; font-weight: bold; margin-bottom: 8px; color: #555; }
        input[type="text"] { width: calc(100% - 22px); padding: 10px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
        input[type="submit"] { background-color: #4a90e2; border: none; border-radius: 4px; color: #fff; padding: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; }
        input[type="submit"]:hover { background-color: #357abd; }
        h2 { color: #2c3e50; }
        ul { list-style-type: disc; margin-left: 20px; }        
    </style>
</head>
<body>
    <h1>PHP in HTML Example</h1>
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize user input
        $name = htmlspecialchars($_POST['name']);
        
        // Display a greeting message
        echo "<h2>Hello, $name!</h2>";
    }
    ?>
    <br>
    <h1>Common Use Cases for PHP in HTML</h1>
    <ul>
        <li><strong>Form Handling:</strong> PHP can process form data submitted by users, such as login forms, registration forms, or contact forms.</li>
        <li><strong>Database Interaction:</strong> PHP can interact with databases to retrieve, insert, update, or delete data. This is useful for creating web applications like blogs, e-commerce sites, or content management systems.</li>
        <li><strong>Dynamic Content:</strong> PHP can generate dynamic content based on user inputs, session data, or other conditions. This allows for personalized web pages and interactive user experiences.</li>
        <li><strong>File Handling:</strong> PHP can read from and write to files on the server, which is useful for tasks like file uploads, log management, or data storage.</li>
        <li><strong>Session Management:</strong> PHP can manage user sessions, allowing for user authentication, access control, and maintaining state across multiple pages.</li>
    </ul>

</body>
</html>
