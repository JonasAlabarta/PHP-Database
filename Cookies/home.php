<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Check if there’s a cookie for the user
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You have successfully logged in.</p>
    <form method="post" action="logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
