<?php
session_start();
if (isset($_SESSION["email"])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="cssForm.css">
        <title>Document</title>
    </head>

    <body>

        <!-- <button class= "logout">
LogOut
</button> -->
        <div class="container">
            <div class="header">
                <h1>
                    Information of User
                </h1>
                <button class="logout" name="logout" ><a href="LogOut.php">LogOut</a></button>
            </div>
            <?php

                include('Mysqli_ConnectionOnlineshop.php');
                $sql = "SELECT * From User";
                $result  = $conn->query($sql);

                echo '<table>
    <tr>
    <th>User_ID</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    ';
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
           <tr>
           <div class = "page">
           <td> ' . $row["userID"] . '</td>
           <td> ' . $row["first_name"] . '</td>
           <td> ' . $row["last_name"] . '</td>
           <td> ' . $row["email"] . '</td>
           <td> <a href = "EditProcess.php?id=' . $row["userID"] . '">Edit</a></td>
           <td> <a href = "DeleteProcess.php?id=' . $row["userID"] . '">Delete</a></td>
           </div>
          </tr>
          ';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                ?>
        </div>

    </body>

    </html>
<?php
}

?>