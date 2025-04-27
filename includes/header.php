<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
    .main-header{
        background-color: #1e1e2f; /*to set the background color of the header */
        color: white; /* to set the text color of the header */
        padding: 5px 10px; /* property to set the padding of the header */
        border-radius: 10px; /* property to set the border radius of the header */
    }
    .main-header .container{
        display: flex; /* property to align items in a row */
        justify-content: space-between; /* property to space items evenly */
        align-items: center; /* property to align items vertically in the center */
        
    }
    .logo a{
        font-size: 24px; /* property to set the font size of the logo */
        color: white; /* property to set the color of the logo */
        text-decoration: none; /* property to remove the underline from the logo */
        font-weight: bold; /* property to set the font weight of the logo */
    }
    .main-nav ul{
        list-style: none; /*to remove the bullets from the list */
        padding: 0; /* property to remove the padding from the list */
        margin: 0; /* property to remove the margin from the list */
        display: flex; /* property to align items in a row */
        gap: 10px; /* property to set the gap between the items in the list */
    }
    .main-nav ul li a{
        color:white; /* property to set the color of the links in the list */
        text-decoration: none; /* property to remove the underline from the links in the list */
        font-size: 16px; /* property to set the font size of the links in the list */
    }
    .main-nav ul li a:hover{
        text-decoration: underline; /* property to add the underline to the links in the list on hover */
    }
</style>
</head>
<body>


    <div class="main-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">TradeNDrive</a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>