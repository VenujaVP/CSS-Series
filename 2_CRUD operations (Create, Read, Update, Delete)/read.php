<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        html, body { height: 100%;  margin: 0; }
        body { font-family: Arial, sans-serif; margin: 50px; background: linear-gradient(to top, #ffcccc, #cc99ff);}
        .view {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        .view th, .view td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .view th {
            background-color: #f2f2f2;
        }
        button[type="submit"] { background-color: #4a90e2; border: none; border-radius: 4px; color: #fff; padding: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; }
        button[type="submit"]:hover { background-color: #357abd; }
    </style>
</head>
<body>
    <b>SHOW Details</b>
    <form action="read.php" method="post">
        <button type="submit" name= "submit1">View Records</button>
    </form>
    <table class="view">
        <tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>EMAIL</th><th>PHONENUMBER</th><th>PASSWORD</th></tr>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["submit1"] ) ){
            include("configre.php");
            
            $sql = "SELECT * FROM useraccount";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["FIRSTNAME"] . "</td>";
                    echo "<td>" . $row["LASTNAME"] . "</td>";
                    echo "<td>" . $row["EMAIL"] . "</td>";
                    echo "<td>" . $row["PHONENUMBER"] . "</td>";
                    echo "<td>" . $row["PASSWORD"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
        }
        //mysqli_close($conn);
        ?>


    </table>
</body>
</html>