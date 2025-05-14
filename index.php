<!-- index.php -->
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <h1>Trade In Your Car with Ease!</h1>
    <p>Get instant offers, fast processing, and peace of mind.</p>
    <button onclick="showAlert()">Get Started</button>
    <button onclick="location.href='about.php'">Learn More</button>
</section>

<!-- How It Works -->
<section class="steps">
    <h2>How It Works</h2>
    <ol>
        <li>Register your account</li>
        <li>Submit your car details</li>
        <li>Receive trade-in offer</li>
        <li>Finalize and trade in</li>
    </ol>
</section>

<!-- Why Choose Us -->
<section class="features">
    <h2>Why Choose Us?</h2>
    <ul>
        <li>✅ Easy Process</li>
        <li>✅ Best Offers</li>
        <li>✅ Secure and Trusted</li>
        <li>✅ Fast Responses</li>
    </ul>
</section>

<!-- Call to Action -->
<section class="cta">
    <h2>Ready to trade in your car?</h2>
    <a href="register.php" class="btn">Register Now</a>
    <a href="login.php" class="btn">Login</a>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JavaScript -->
<script>
    function showAlert() {
        alert("Welcome! Please register or login to begin your trade-in process.");
    }
</script>
