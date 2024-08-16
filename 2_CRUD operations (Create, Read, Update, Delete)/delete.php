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
        input { width: calc(100% - 22px); padding: 10px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
        button[type="submit"] { background-color: #4a90e2; border: none; border-radius: 4px; color: #fff; padding: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; }
        button[type="submit"]:hover { background-color: #357abd; }
    </style>
</head>
<body>
    <form action="delete.php" method="post">
        <label>Input Your Mail</label>
        <input type="text" name="email" id="email"><br>
        <button type="submit" name= "delete">Delete Your Record</button>
    </form>

    <?php
        include ("configre.php");
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])){
            $email = $_POST["email"];

            $sql = "SELECT 'EMAIL' FROM useraccount WHERE EMAIL= '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $sql = "DELETE FROM useraccount WHERE EMAIL = '$email'";
                $result = mysqli_query($conn, $sql);
                if($result == True){
                    echo "Dwlete Done";
                }else{
                    echo "Delete Error Error";
                }
            }else{
                echo "No Values To Delete from -".$email;
            }
        }

    ?>

</body>
</html>