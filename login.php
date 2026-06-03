<?php

session_start();

$conn = new mysqli(
		"localhost",
		"clouduser",
		"Cloud@123",
		"cloudproject"	
		);

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE email=?"
    );

    $stmt->bind_param("s",$email);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){

        $user = $result->fetch_assoc();

        if(password_verify(
            $password,
            $user['password']
        )){

            $_SESSION['user'] =
            $user['name'];

            header("Location: dashboard.php");
            exit();

        }else{

            $message = "Invalid Password";
        }

    }else{

        $message = "User Not Found";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="card">

<h1>Login</h1>

<p><?php echo $message; ?></p>

<form method="POST">

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">
Login
</button>

</form>

<a href="signup.php">
Create Account
</a>

</div>

</body>

</html>
