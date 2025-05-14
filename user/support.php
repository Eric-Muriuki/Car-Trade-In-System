<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main>
  <h1>Support</h1>
  <form method="POST">
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Your message" required></textarea>
    <button type="submit">Send</button>
  </form>
</main>

<?php include 'includes/footer.php'; ?>
