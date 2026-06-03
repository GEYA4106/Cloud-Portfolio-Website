<?php

$conn = new mysqli(
		"localhost",
		"clouduser",
		"Cloud@123",
		"cloudproject"
		);

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT id FROM users WHERE email=?");
    $check->bind_param("s",$email);
    $check->execute();
    $check->store_result();

    if($check->num_rows > 0){

        $message = "Email already registered!";

    }else{

        $stmt = $conn->prepare(
            "INSERT INTO users(name,email,password)
             VALUES(?,?,?)"
        );

        $stmt->bind_param(
            "sss",
            $name,
            $email,
            $password
        );

        if($stmt->execute()){

            $message = "Signup Successful! Please Login.";

        }else{

            $message = "Error creating account.";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Signup</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="card">

<h1>Create Account</h1>

<p><?php echo $message; ?></p>

<form method="POST">

<input
type="text"
name="name"
placeholder="Full Name"
required>

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
Sign Up
</button>

</form>

<a href="login.php">
Already have an account?
</a>

</div>

</body>

</html>
