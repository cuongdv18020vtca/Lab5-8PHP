<?php


try {
    require("Mysqli_ConnectionOnlineshop.php");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Success";
    // Get form inputs
    $first_name = $_POST["first_name"];	
    $last_name = $_POST["last_name"];	
    $email = $_POST["email"];	
    $password1 = $_POST["password"];
    echo "ten la:".$_POST["first_name"];
    $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);     
    // Make and prepare the query                                               
    $query = "INSERT INTO User (first_name, last_name, email, passwords, registration_date) ";
    $query .= "VALUES(?, ?, ?, ?, NOW())";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_passcode);
    
    // Run and check the query's result
    if ($stmt->execute()) {	// One record inserted			
        header ('location: WelcomeForm.php'); 
        exit();
    } else { // If it did not run OK.
        echo "K them dc";
        $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
        $errorstring .= "System Error<br />You could not be registered due ";
        $errorstring .= "to a system error. We apologize for any inconvenience.</p>"; 
        exit();
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// Close statement and connection
$stmt->close();
$conn->close();
?>




