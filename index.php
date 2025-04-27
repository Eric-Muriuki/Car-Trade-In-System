<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS file -->
    <style>
        section{
            padding: 60px 20px; /* top/bottom and left/right padding */
            max-width: 1200px; /* provides a maximum width for the section */
            margin: 0 auto; /* centers the section on the page */
        }
        .hero{
            background: linear-gradient(135deg, #003973, #e5e5be); /* gradient background */
            color: white; /* text color */
            text-align: center; /* centers the text */
            padding: 100px 20px; /* top/bottom and left/right padding */
            margin-bottom: 50px;
            border-radius: 10px; /* rounded corners */
        }
        .hero h1{
            font-size: 3em; /* font size for the heading */
            margin-bottom: 15px; /* space below the heading */
        }
        .hero p{
            font-size: 1.3em; /* font size for the paragraph */
            margin-bottom: 20px; /* space below the paragraph */
        }
        .hero button{
            background-color: #ff5722; /* button background color */
            color: white; /* button text color */
            border: none; /* no border */
            padding: 15px 30px; /* top/bottom and left/right padding */
            margin: 10px; /* space around the button */
            font-size: 1em; /* font size for the button text */
            border-radius: 30px; /* rounded corners for the button */
            cursor: pointer; /* pointer cursor on hover */
            transition: background-color 0.3s; /* smooth transition for background color */
        }
        .hero button:hover{
            background-color: #e64a19; /* darker shade on hover */
        }
        .steps{
            background-color: #f5f5f5; /* light background color */
            padding: 50px 30px; /* top/bottom and left/right padding */
            border-radius: 10px; /* rounded corners */
            margin-bottom: 40px; /* space below the section */
            text-align: center; /* centers the text */
        }
        .steps h2{
            font-size: 2.5em; /* font size for the heading */
            margin-bottom: 20px; /* space below the heading */
            color: #003973; /* heading color */
        }
        .steps ol{
            list-style-position: inside; /* positions the list items inside the container */
            font-size: 1.2em; /* font size for the list items */
            color: #333; /* text color for the list items */
        }
        .steps ol li{
            margin-bottom: 10px; /* space below each list item */
        }

        .features{
            background-color: #ffffff; /* white background color */
            padding: 50px 30px; /* top/bottom and left/right padding */
            border-radius: 10px; /* rounded corners */
            margin-bottom: 40px; /* space below the section */
            text-align: center; /* centers the text */
        }
        .features h2{
            font-size: 2.5em; /* font size for the heading */margin-bottom: 20px; /* space below the heading */
            color: #003973; /* heading color */
        }
        .features ul{
            list-style: none; /* removes the bullets from the list */
            padding-left: 0; /* removes the left padding */
        }
        .features ul li{
            font-size: 1.1em; /* font size for the list items */
            margin-bottom: 10px; /* space below each list item */
            padding-left: 30px; /* left padding for the list items */
            position: relative; /* positions the list items relative to their container */
        }
    </style>

</head>
<body>

<?php include 'includes/header.php'; ?>
    
<!-- Main content of the homepage goes here -->
 <section class="hero">
    <h1>Trade In Your Car With Ease!</h1>
    <p>Get instant offers, fast processing and a peace of mind.</p>
    <button onclick="showAlert()">Get Started</button> 
    <button onclick="location.href='about.php'">Learn More</button>
 </section>

 <section class="steps">
 <h2>How It Works</h2>
 <ol>
    <li>Register your account.</li>
    <li>Submit your car details.</li>
    <li>Receive trade-in offer</li>
    <li>Finalize and trade in</li>
</ol>
</section>
<section class="features">
    <h2>Why Choose Us?</h2>
    <ul>
        <li>✅ Easy Process</li>
        <li>✅ Best Offers</li>
        <li>✅ Secure and Trusted</li>
        <li>✅ Fast Responses</li>
    </ul>
</section>

<section class="cta">
    <h2>Ready to trade-in your car?</h2>
    <a href="register.php" class="btn">Register Now</a>
    <a href="login.php" class="btn">Login</a>
</section>




 
<?php include 'includes/footer.php'; ?>

 <script>
    function showAlert() {
        alert("Welcome to TradeNDrive! Please register or login to begin your trade-in process.");
    }
    
</script>

</body>
</html>