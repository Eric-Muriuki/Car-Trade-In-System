<!-- register.php -->
<?php include 'includes/header.php'; ?>

<section class="hero">
    <h1>Create Your Account</h1>
    <p>Start your car trade-in journey with us today.</p>
</section>

<section class="register-form">
    <form action="process_register.php" method="POST">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</section>

<?php include 'includes/footer.php'; ?>
