<?php
    include "./includes/header.php";
    include "./db/conn.php";
    session_start();
    If($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $contactNo = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];

        $sql = "INSERT INTO `user`(`email_id`, `name`, `password`, `contact`, `age`) 
        VALUES ('$email','$name','$password','$contactNo','$age')";
        try {
            if (mysqli_query($conn, $sql)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $email;
                echo '<div class="container mt-5">
                        <h1 class="mt-5 text-center text-success">User added successfully!</h1>
                    </div>';
            } else {
                throw new Exception(mysqli_error($conn));
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $_SESSION['error-message'] = "User already exists";
                header('Location: /php/signup.php');
                exit();
            } else {
                echo "Error: " . $e->getMessage();
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    
    }
    
?>
<?php
    include "./includes/footer.php";
?>