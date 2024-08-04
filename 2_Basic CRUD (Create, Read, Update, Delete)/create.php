<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>        
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        form { background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; max-width: 100%; }
        label { display: block; font-weight: bold; margin-bottom: 8px; color: #555; }
        .input { width: calc(100% - 22px); padding: 10px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
        button[type="submit"] { background-color: #4a90e2; border: none; border-radius: 4px; color: #fff; padding: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; }
        button[type="submit"]:hover { background-color: #357abd; }
    </style>
</head>
<body>
    <form action="create.php" method="post">
        <label for="firstname">First Name</label>
        <input type="text" class = "input" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Last Name</label>
        <input type="text" class = "input" id="lastname" name="lastname" required><br><br>
        
        <label for="email">Email</label>
        <input type="email"  id="email" name="email" class = "input"required><br><br>
        
        <label for="phonenumber">Phone Number</label>
        <input type="tel" class = "input" id="phonenumber" name="phonenumber" required><br><br>
        
        <label for="password">Password</label>
        <input type="password" class = "input" id="password" name="password" required><br><br>
        
        <button type="submit" name= "submit">Sign Up</button>
    </form>

<?php
    include ("configre.php");
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = trim($_POST["email"]);
        $phonenumber = $_POST["phonenumber"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        $sql = "INSERT INTO `useraccount` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PHONENUMBER`, `PASSWORD`) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result == True) {
            echo "Added Sussessful";
        } else {
            echo "errror";
        }
    }
    mysqli_close($conn);
?>
</body>
</html>
