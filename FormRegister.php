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
    <?php
    $FirstErr =  $LastNameErr = $EmailErr = "";
    $FirstName =  $LastName = $Email = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["first_name"])) {
            $FirstErr = "firstname required";
        } else {
            $FirstName = test_input($_POST["first_name"]);
        }
        if (empty($_POST["last_name"]) == "POST") {
            $LastNameErr = "last_name required";
        } else {
            $LastName = test_input($_POST["last_name"]);
        }
        if (empty($_POST["email"]) == "POST") {
            $EmailErr = "email required";
        } else {
            $Email = test_input($_POST["email"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <h4>Register</h4>
    <div class="row">
        <?php
        if (isset($_POST["submit"])) {
            if (!empty($_POST["first_name"]) or !empty($_POST["last_name"]) or !empty($_POST["email"]) or !empty($_POST["password"])) {
                echo '<p style = "color: red">Vui long khong de trong </p>';
            } else {

                if (isset($_POST["first_name"])) {
                    echo "co r + " . $_POST["first_name"];
                } else {
                    echo "chua co";
                }
            }
        }
        ?>
    </div>
    <div class="form">
        <form action="Process.php" method="POST">
            <!-- <label>UserID</label>
        <input type="text" name=" UserID"> -->
            <div class="row">
                <label> First Name</label>
                <input type="text" name=" first_name">
                <span class="error">* <?php echo $FirstErr; ?></span>
            </div>
            <br>
            <br>
            <div class="row">
                <label>Last_name </label>
                <input type="text" name=" last_name">
                <span class="error">* <?php echo $LastNameErr; ?></span>
            </div>
            <br>
            <br>
            <div class="row">
                <label>Email</label>
                <input type="text" name="email">
                <span class="error">* <?php echo $EmailErr; ?></span>
            </div>
            <br>
            <div class="row">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>