<?php

$con = mysqli_connect("localhost", "root", "", "test");

if ($_POST) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $name = mysqli_real_escape_string($con, $_POST['name']);

    $sql = "INSERT INTO user(name, username, password) VALUES('$name', '$username', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "Created account. Please login";
        $msg = "";
    }
} else {
    $msg = "";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
</head>
<body>
        <form action method="POST">
            <input class="form-control" type="text" placeholder="name" name="name" required /><br />
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <p><?php echo $msg; ?></p>
            <button>Sign-up</button>
            <p>Already have an account? <a href="loginpage.php">Login</a></p>
        </form>
</body>
</html>