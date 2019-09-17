<?php
    session_start();
    if (isset($_SESSION["first_name"])) 
    {
        
?>
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
        while($row = $result->fetch_assoc()) {
           echo '<tr>
           <td> '.$row["userID"].'</td>
           <td> '.$row["first_name"].'</td>
           <td> '.$row["last_name"].'</td>
           <td> '.$row["email"].'</td>
           <td> <a href = "EditProcess.php?id='.$row["userID"].'">Edit</a></td>
        
          </tr>'
           ;

        }
    } else {
    echo "0 results";
    }
    $conn->close();

?>
<?php
    }
 
?>
