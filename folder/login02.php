<?php
include "connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['fullname'] = $user['fullname'];

            header("Location: dashboard.php");
            exit(); // VERY IMPORTANT
        } else {
            echo "<script>alert('Wrong password!!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('No user with that email!!'); window.location.href='index.php';</script>";
    }
}
?>
