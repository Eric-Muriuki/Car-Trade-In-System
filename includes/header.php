<style>/* Header Styles */
.main-header {
    background-color: #1e1e2f;
    padding: 15px 0;
    color: white;
}
.main-header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo a {
    font-size: 1.5em;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 20px;
}
.main-nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}
.main-nav ul li a:hover {
    text-decoration: underline;
}
</style>

<!-- includes/header.php -->
<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="/index.php">CarTradeIn</a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/login.php">Login</a></li>
                <li><a href="/register.php">Register</a></li>
            </ul>
        </nav>
    </div>
</header>
