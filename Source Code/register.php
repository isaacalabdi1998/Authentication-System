<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, passwd, email) VALUES (?, ?, ?)");

    try 
	{
        $stmt->execute([$username, $hashedPassword, $email]);
        header('Location: login.php');
        exit();
    } catch (PDOException $e) 
	{
        echo "Error: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Web Application</title>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Include Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="styles.css">  

</head>
<body>
	<div class="container">
		<div class="form-container">
			<div class="text-center mb-4">
			<img src="sources/images/login_logo.png"  class="logo-image" alt="Logo">
			</div>
			<h2>User Registration</h2>
			<form method="POST" action="">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" name="username" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" required>
			</div>
			<div class="text-center mt-3">
				<p>Already have an account? <a href="login.php">Login here</a>.</p>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div> <!-- end form-container -->

	</div> <!-- end container -->
</body>
</html>
