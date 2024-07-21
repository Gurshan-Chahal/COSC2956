<style>
   body {
        background-image: url('../images/contact.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<?php
    include "./includes/header.php";
    include "./db/conn.php";
    If($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $contactNo = $_POST['contact'];
        $details = $_POST['details'];

        $sql = "INSERT INTO `contact`( `Name`, `contactNo`, `details`) VALUES 
        ('$name','$contactNo','$details')";

        if (mysqli_query($conn, $sql)) {
            echo '<div class="container mt-5  d-flex justify-content-center align-items-center h-100">
                        <h1 class="mt-5 bg-dark text-center text-success p-5">Your response recorded successfully!</h1>
                    </div>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
    }
    
?>
<?php
    include "./includes/footer.php";
?>
