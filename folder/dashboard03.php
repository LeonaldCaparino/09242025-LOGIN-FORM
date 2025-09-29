<?php
session_start();

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header("Location: index01.php");
    exit();
}

$name = $_SESSION['fullname'];
$ouremail = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWICE Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-200 via-yellow-100 to-pink-300 min-h-screen flex items-center justify-center">

    <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-2xl w-full max-w-md text-center">
        <h1 class="text-4xl font-bold text-pink-600 mb-4">
            Welcome, <?php echo htmlspecialchars($name); ?> 💖
        </h1>

        <p class="text-gray-600 mb-6">
            You’re now logged in to your FanBase Account🎶
        </p>

        <div class="bg-pink-100 p-6 rounded-xl shadow-md mb-6">
            <h2 class="text-2xl font-semibold text-pink-500 mb-2">👤 <?php echo htmlspecialchars($name); ?></h2>
            <p class="text-gray-700">📧 <?php echo htmlspecialchars($ouremail); ?></p>
        </div>

        <div class="space-y-3">
            <a href="#" class="block w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition">
                🎤TWICE Announcement
            </a>
            <a href="#" class="block w-full bg-yellow-400 text-white py-2 rounded-lg hover:bg-yellow-500 transition">
                📸Gallery
            </a>
            <a href="#" class="block w-full bg-green-400 text-white py-2 rounded-lg hover:bg-green-500 transition">
                💬Talk
            </a>
            <a href="logout.php" class="block w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">
                🚪Logout
            </a>
        </div>
    </div>
</body>
</html>
