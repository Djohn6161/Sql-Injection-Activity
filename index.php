<?php
$result = "";
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
    <div class="container">
        <form name="login" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="loginHeader">
                <h2>Login</h2>
            </div>
            <div class="loginBody">

                <div class="input">
                    <label for="username"> <b>Username:</b></label>  
                    <input type="text" class="loginInput" placeholder="Enter Username" name="username" required>
                </div>
                
                <br>
                <div class="input">
                    <label for="password"><b>Password:</b></label>
                    <input type="password" class="loginInput" placeholder="Enter Password" name="password" required>
                </div>
                
                <br>
                <div class="submit">
                    <button type="submit" class="loginSubmit">Login</button>
                </div>
            </div>
        </form>
    </div>

    <div class="result">
        <?php 
            echo $result;
        ?>
    </div>
</body>
</html>