<?php
session_start();
include 'db.php';

if (isset($_POST['signin'])) {
    // Clean input
    $user_input = trim(mysqli_real_escape_string($conn, $_POST['user_input']));
    $password = trim($_POST['password']);

    // Check for username or email
    $sql = "SELECT * FROM users WHERE username='$user_input' OR email='$user_input'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $storedHash = trim($user['password']);

        // Verify password
        if (password_verify($password, $storedHash)) {
            $_SESSION['username'] = $user['username'];

            // ✅ Redirect logic
            if (isset($_SESSION['redirect_after_login']) && !empty($_SESSION['redirect_after_login'])) {
                $redirect = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']);
                header("Location: $redirect");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }

        } else {
            echo "<script>alert('Incorrect Password'); window.location.href='sign_in.html';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username or Email not found'); window.location.href='sign_in.html';</script>";
        exit();
    }
} else {
    // Direct access to signin.php without form submission
    header("Location: sign_in.html");
    exit();
}
?>
