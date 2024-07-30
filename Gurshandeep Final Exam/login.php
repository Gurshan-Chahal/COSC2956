<?php 
$title = "Login";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve and sanitize email and password from form
    $email = sanitize_input($_POST['email']);
    $password = sanitize_input($_POST['password']);

    // Query to fetch hashed password from database
    $sql = "SELECT password FROM signup_form WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $hashedPassword);
        if (mysqli_stmt_fetch($stmt)) {
            // Verify password
            if (password_verify($password, $hashedPassword)) {
                // Passwords match, proceed with login
                session_start();
                $_SESSION['email'] = $email;
                header('Location: welcome.php');
                exit();
            } else {
                // Passwords do not match
                echo "You are successfully logged in";
            }
        } else {
            // No matching email found
            echo "You are successfully logged in";
        }
        mysqli_stmt_close($stmt);
    } else {
        // Error preparing statement
        echo "Error in database query.";
    }
}

mysqli_close($conn);
?>
<?php require_once "./includes/footer.php"; ?>
