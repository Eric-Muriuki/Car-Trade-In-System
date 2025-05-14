<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main>
  <h1>Submit Trade-In Request</h1>
  <form method="POST" action="#">
    <input type="text" name="car_model" placeholder="Car Model" required>
    <input type="text" name="year" placeholder="Year" required>
    <textarea name="condition" placeholder="Describe the condition" required></textarea>
    <button type="submit">Submit</button>
  </form>
</main>

<?php include 'includes/footer.php'; ?>
