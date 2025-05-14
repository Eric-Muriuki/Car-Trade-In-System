<?php
// process registration
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Register</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="register-box">
    <h2>Create Account</h2>
    <form method="POST" action="login.php">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
