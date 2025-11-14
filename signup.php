<?php
session_start();
include 'db.php';

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if username or email already exists
    $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or Email already exists'); window.location='sign_up.html';</script>";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            // ✅ Sign-up successful, log the user in
            $_SESSION['username'] = $username;

            // 🔁 Redirect logic (same as signin.php)
            if (isset($_SESSION['redirect_after_login']) && !empty($_SESSION['redirect_after_login'])) {
                $redirect = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']); // clear it after use
                header("Location: $redirect");
                exit();
            } else {
                // Default: go to home page
                header("Location: index.php");
                exit();
            }

        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
