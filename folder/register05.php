<?php
session_start();
include "connect06.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Encrypt the password bago i-save
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check kung existing na ang email
    $check = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($check->num_rows > 0) {
        echo "⚠️ Email already registered. Try another one.";
    } else {
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {
            echo "✅ Registration successful! You can now <a href='index.php'>login</a>.";
        } else {
            echo "❌ Error: " . $conn->error;
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TWICE Fan Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-200 via-yellow-100 to-pink-300 min-h-screen flex items-center justify-center">

    <div class="bg-white bg-opacity-95 p-8 rounded-2xl shadow-2xl w-full max-w-md text-center">
        <h1 class="text-3xl font-bold text-pink-600 mb-6">✨ Register as ONCE ✨</h1>

        <form method="POST" class="space-y-4">
            <input type="text" name="fullname" placeholder="Full Name"
                class="w-full px-4 py-2 border rounded-lg" required>
            
            <input type="email" name="email" placeholder="Email"
                class="w-full px-4 py-2 border rounded-lg" required>
            
            <input type="password" name="password" placeholder="Password"
                class="w-full px-4 py-2 border rounded-lg" required>
            
            <button type="submit"
                class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition">
                💖 Register
            </button>
        </form>

        <p class="mt-4 text-gray-600">Already a member? 
            <a href="index.php" class="text-pink-500 font-semibold">Login here</a>
        </p>
    </div>

</body>
</html>