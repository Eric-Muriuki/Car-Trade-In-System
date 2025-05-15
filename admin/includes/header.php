<!-- /admin/includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Car Trade-In System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .header{
      background-color: #e7eaf6; /* Light purple background */
      padding: 20px; /* Space around the header */
      border-bottom: 2px solid #ccc; /* Bottom border */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      color: #333; /* Text color */
    }
    .header .container{
      display: flex; /* Flexbox for layout */
      justify-content: space-between; /* Space between items */
      align-items: center; /* Center items vertically */
    }
    .header .container h1{
      font-size: 24px; /* Font size for the title */
      margin: 0; /* No margin */
      color: #333; /* Title color */
    }
    .header .container .admin-top-nav{
      display: flex; /* Flexbox for navigation */
      gap: 20px; /* Space between links */
    }
    .header .container .admin-top-nav a{
      text-decoration: none; /* No underline */
      color: #333; /* Link color */
      font-size: 16px; /* Font size for links */
    }
    .header .container .admin-top-nav a:hover{
      color: #007bff; /* Change color on hover */
      text-decoration: underline; /* Underline on hover */
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="container">
      <h1>TradeNDrive</h1>
      <nav class="admin-top-nav">
        <a href="dashboard.php">Dashboard</a>
        <a href="manage_users.php">Users</a>
        <a href="manage_cars.php">Cars</a>
        <a href="respond_requests.php">Requests</a>
        <a href="view_tradeins.php">Trade-ins</a>
        <a href="reports.php">Reports</a>
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </header>
