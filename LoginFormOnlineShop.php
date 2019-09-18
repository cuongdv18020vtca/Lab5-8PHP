<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cssForm.css">
    <title>Login</title>
</head>

<body>

    <div class="form">
        <h1 style="padding-left:72px">Login</h1>
        <div id="Err"><?php echo $_SESSION["Err"] ?></div>
        <br>
        <form action="LoginProcess.php" method="POST">

            <div class="row">
                <label>Email</label>
                <input type="text" name="email">
                <span class="error"> <?php echo $EmailErr; ?></span>
            </div>
            <br>
            <div class="row">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <br>
            <div class="button">
         
            <button type="submit" name="submit">Register</button>
            <button type="text" name="login">Login</button>
           
          </div>
        </form>
    </div>
</body>

</html>