<?php
    $servername = "localhost";;
    $username = "root";
    $password = "";
    $dbname = "sql-injection";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sql Injection</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="result">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $user = $_POST['username'];
                $pass = $_POST['password'];
                
                $sql = "SELECT * FROM user where username='$user' AND password='$pass'";
        
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    echo "<a href='index.php' class='status' >SUCCESSFUL</a>";
                }else{
                    echo "<a href='index.php' class='status' >Failed</a>";
                }
            }
            ?>
        </div>
    </body>
    </html>
