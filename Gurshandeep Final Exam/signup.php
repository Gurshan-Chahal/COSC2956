
<?php 
    $title = "Sign Up";
    require_once './includes/header.php';
    require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

 //   $first_name = sanitize_input($_POST["first_name"]);
    $last_name = sanitize_input($_POST["last_name"]);
    $username = sanitize_input($_POST["username"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);
    $confirm_password = sanitize_input($_POST["confirm_password"]);
    $address = sanitize_input($_POST["address"]);
    $city = sanitize_input($_POST["city"]);
    $province = sanitize_input($_POST["province"]);
    $area_code = sanitize_input($_POST["area_code"]);

    if ($password !== $confirm_password) {
        die("Passwords do not match. Please go back and try again.");
    }

    $options = ['cost' => 12];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

    $sql = "INSERT INTO users (first_name, last_name, username, email, password, address, city, province, area_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $username, $email, $hashedPassword, $address, $city, $province, $area_code);
        
        if (mysqli_stmt_execute($stmt)) {
            header('Location: welcome.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<?php 
    require_once "./includes/footer.php"
?>
