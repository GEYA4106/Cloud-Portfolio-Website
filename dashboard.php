<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="card">

<h1>Welcome</h1>

<h2>
<?php
echo $_SESSION['user'];
?>
</h2>

<br>

<a href="logout.php">
Logout
</a>

</div>

</body>

</html>

