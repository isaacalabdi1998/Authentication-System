<?php
  session_start();
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
        <h1>Welcome to Authentication System Web App</h1>

		<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
			<h2>Welcome, <span class="username"><?php echo $_SESSION['username'] ?></span>, Click <a href="logout.php">here</a> to logout</h2>
		<?php } else { ?>
				<h2><a href="login.php">Login Here</a> &nbsp; or &nbsp; <a href="register.php">Register here</a></h2>
		<?php } ?>
    </div> <!-- end container -->
</body>
</html>
