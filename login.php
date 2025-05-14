<!-- login.php -->
<?php include 'includes/header.php'; ?>

<section class="hero">
    <h1>Login</h1>
    <p>Access your account and manage your car trade-ins.</p>
</section>

<section class="login-form">
    <form action="process_login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</section>

<?php include 'includes/footer.php'; ?>
