<?php
// process login if submitted
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="dashboard.php">
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
