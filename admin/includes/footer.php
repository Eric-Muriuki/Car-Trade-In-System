<!-- /admin/includes/footer.php -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
    .footer {
      background-color: #e7eaf6; /* Light purple background */
      padding: 20px; /* Space around the footer */
      border-top: 2px solid #ccc; /* Top border */
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      color: #333; /* Text color */
    }
    .footer .container {
      display: flex; /* Flexbox for layout */
      justify-content: center; /* Center items */
      align-items: center; /* Center items vertically */
    }
    .footer .container p {
      font-size: 16px; /* Font size for the text */
      margin: 0; /* No margin */
      color: #333; /* Text color */
    }
  </style>
</head>
<body>
  <footer class="footer">
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> TradeNDrive. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
