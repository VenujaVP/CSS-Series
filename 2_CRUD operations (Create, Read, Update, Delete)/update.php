<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>        
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        form { align-self: center; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; max-width: 100%; }
        label { display: block; font-weight: bold; margin-bottom: 8px; color: #555; }
        input { width: calc(100% - 22px); padding: 10px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
        button[type="submit"] { background-color: #4a90e2; border: none; border-radius: 4px; color: #fff; padding: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; }
        button[type="submit"]:hover { background-color: #357abd; }
    </style>
</head>
<body>
    <form action="update.php" method="post">
        <label>Input Your Mail</label>
        <input type="text" name="email" id="email"><br>
        <label>Input Your New Phone Number</label>
        <input tabindex="text" name="newnum" id="newPnum"><br>
        <button type="submit" name= "update">Update</button>
    </form>

    <?php
        include ("configre.php");
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])){
            $email = $_POST["email"];
            $newnum = $_POST["newnum"];

            $sql = "SELECT 'EMAIL' FROM useraccount WHERE EMAIL= '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $sql = "UPDATE useraccount SET PHONENUMBER='$newnum' WHERE EMAIL = '$email'";
                $result = mysqli_query($conn, $sql);
                if($result == True){
                    echo "Update Done";
                }else{
                    echo "Update Error";
                }
            }else{
                echo "No Record Using ".$email;
            }
        }

    ?>

</body>
</html>