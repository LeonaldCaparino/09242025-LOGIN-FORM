<?php
include "connect.php";
session_start();

    // LOGIN USERS HERE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        // get form data
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // FETCH DATABASE

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // CHECK IF PASSWORD IS CORRECT
            if (password_verify($password, $user['password'])) {
                echo "Login successful, Welcome " . $user['fullname'];
                // save data into session
                $_SESSION['email'] = $user['email'];
                $_SESSION['fullname'] = $user['fullname'];
               
                //redirect to dashboard..
                header("Location: dashboard.php");
                
            } else {
                echo "wrong password!!";
            }
        } else {
            // email doesnt exist
            echo " NO USER WITH THAT EMAIL";
        }
    }
?> 