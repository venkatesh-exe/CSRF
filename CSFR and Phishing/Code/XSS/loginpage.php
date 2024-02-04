<?php

$con = mysqli_connect("localhost", "root", "", "test");
session_start();

if ($_POST) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: frontpage.php");
    } else
        $msg = "Invalid Username/Password";
} else {
    $msg = "";
}

?>

<!DOCTYPE html>
<html>
<head>
	WELCOME TO THE LOGIN PAGE   
</head>

<body>
        <form action method="POST">
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <button>Login</button>
            <p>Don't have an account? <a href="createpage.php">Signup</a></p>
        </form>
</body>
</html>