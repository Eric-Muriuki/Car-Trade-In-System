<!-- /admin/includes/sidebar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
  .sidebar{
    background-color: #e7eaf6; /* Light purple background */
    padding: 20px; /* Space around the sidebar */
    border-right: 2px solid #ccc; /* Right border */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    color: #333; /* Text color */
    width: 200px; /* Fixed width for the sidebar */
    position: fixed; /* Fixed position */
    height: 100%; /* Full height */
  }
  .sidebar ul{
    list-style-type: none; /* No bullet points */
    padding: 0; /* No padding */
    margin: 0; /* No margin */
  }
  .sidebar ul li{
    margin: 10px 0; /* Space between items */
  }
  .sidebar ul li a{
    text-decoration: none; /* No underline */
    color: #333; /* Link color */
    font-size: 16px; /* Font size for links */
  }
  .sidebar ul li a:hover{
    color: #007bff; /* Change color on hover */
    text-decoration: underline; /* Underline on hover */
  }
  .
  </style>
</head>
<body>
  <aside class="sidebar">
  <ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="manage_users.php">Manage Users</a></li>
    <li><a href="manage_cars.php">Manage Cars</a></li>
    <li><a href="view_tradeins.php">View Trade-Ins</a></li>
    <li><a href="respond_requests.php">Respond to Requests</a></li>
    <li><a href="reports.php">Reports</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</aside>
  
</body>
</html>