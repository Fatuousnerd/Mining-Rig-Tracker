<?php
session_start();

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    //header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mining Pool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Mining Pool</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">My Rigs</a></li>
            <li><a href="#">Mining Stats</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <header>
        <h2>Welcome <?php echo $username; ?> to your Mining Pool Dashboard</h2>
        <p>Monitor your mining rigs and track your earnings in one place.</p>
    </header>

    <main>
        <section>
            <h3>My Rigs</h3>
            <p>You currently have no mining rigs.</p>
            <button>Add a rig</button>
        </section>

        <section>
            <h3>Mining Stats</h3>
            <p>No mining activity to display.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2021 Mining Pool</p>
    </footer>
</body>
</html>
