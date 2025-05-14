<!-- contact.php -->
<?php include 'includes/header.php'; ?>

<section class="hero">
    <h1>Contact Us</h1>
    <p>We’re here to help! Reach out to us with any questions.</p>
</section>

<section class="contact-form">
    <form action="send_message.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
