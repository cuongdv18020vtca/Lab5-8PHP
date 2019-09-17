<?php
session_start();
?>
<?php

try {
    require("Mysqli_ConnectionOnlineshop.php");
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
    $Username = $_POST["first_name"];
    $Password = $_POST["password"];
    // $hashed = password_verify($Password,PASSWORD_DEFAULT);

    // $hashed_passcode = password_verify($Password, PASSWORD_DEFAULT);
    // echo $hashed_passcode;
    // echo $hashed;
    $query = "select * from user";
    $result = $conn->query($query);
    if (isset($_POST["submit"])) {
        while ($row = $result->fetch_assoc()) {
           if (password_verify( $_POST["password"],$row["passwords"]) && $row["first_name"] === $_POST["first_name"]) {
               $_SESSION["first_name"] = $_POST["first_name"];
                header('Location: AdminPage.php');
                break;
            } 
            else {
                header('Location: LoginFormOnlineShop.php');
            } 
        }
    }

    
} catch (\Throwable $th) {
    //throw $th;
}
