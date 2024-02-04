<?php

$con = mysqli_connect("localhost", "root", "", "test");

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userQuery = "SELECT * FROM user WHERE username = '$username'";
    $userResult = mysqli_query($con, $userQuery);

    $data = mysqli_fetch_assoc($userResult);
} else {
    header("Location: loginpage.php");
}

?>
<!DOCTYPE html>
<html>
<head>
DASHBOARD
</head>
<body>
    <p>Welcome to dashboard <?php echo $data['name']; ?></p>
</body>
<script>
    alert(1);
</script>
</html>