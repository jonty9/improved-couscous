<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  
</head>
<body>
  
  <form method="post" action="register.php">
  	
  	
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	 
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	
  	 <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>