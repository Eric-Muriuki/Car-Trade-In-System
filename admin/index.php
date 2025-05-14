<!-- admin/index.php -->
<?php
// Login form for admin
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login - Car Trade-In</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <form method="POST" action="dashboard.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
