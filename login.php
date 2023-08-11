<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "myappdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to check user credentials
    $sql = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        // User is authenticated
        $_SESSION["loggedIn"] = true;
        header("Location: dashboard.php"); // Redirect to dashboard or desired page
    } else {
        // Invalid credentials
        $error = "Invalid email or password";
    }

    mysqli_close($conn);
}
?>
