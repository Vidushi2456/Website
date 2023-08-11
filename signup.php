<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["signupUsername"];
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "myappdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if email already exists
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $error = "Email already exists";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            $success = "Registration successful!";
			header("Location: dashboard.htm");
			exit();
        } else {
            $error = "Registration failed";
        }
    }

    mysqli_close($conn);
}
?>
