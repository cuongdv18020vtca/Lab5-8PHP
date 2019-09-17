<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>

<body>
    <?php
        $id = $_GET["id"];
        echo $id;
        echo $_SESSION["first_nameEdit"];
        // include("EditProcess.php?id=" .$id);
    ?>
    <h1>Edit User</h1>

    <form action="EditProcess.php?id=<?php echo $id?>" method="POST">
        <label>First_name</label>
        <input type="text" value="<?php echo $_SESSION["first_nameEdit"] ?>" name="first_nameEdit">
        <br>
        <label>Last_name</label>
        <input type="text" value="<?php echo $_SESSION["last_nameEdit"] ?>" name="last_nameEdit">
        <br>
        <br>
        <label>Email</label>
        <input type="text" value="<?php echo $_SESSION["emailEdit"] ?>" name="emailEdit">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>