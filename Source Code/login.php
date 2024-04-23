<?php

session_start();

include_once 'db_connection.php';

$error = ''; // Initialize an error variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // verify user exists and verify the password too
    if ($user && password_verify($password, $user['passwd'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        header("location: index.php");
    } else if($user && !password_verify($password, $user['passwd'])) {
        $error = "Authentication failed. Invalid password.";
    } else {
        $error = "User does not exit. Please register for an account.";
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
            <h2>User Login</h2>
            <form method="POST" action="">
            <?php if ($error !== ''): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="form-group">
                <label for="email">Username:</label>
                <input type="username" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="register.php">Register here</a>.</p>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div> <!-- end form-container -->
    </div> <!-- end container -->
</body>
</html>

