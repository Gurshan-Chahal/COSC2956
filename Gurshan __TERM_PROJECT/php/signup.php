<?php

include "../includes/header.php";
session_start();
?>

<style>
    body {
        background-image: url('../images/bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-body {
        padding: 2rem;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-dark {
        background-color: #343a40;
        border-color: #343a40;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <?php
                        if(isset($_SESSION['error-message'])){
                            echo '<div class="text-center mb-3">
                            <label class="text-danger" for="email" style="font-weight: bold;">'.$_SESSION['error-message'].'</label>
                        </div>';
                            unset($_SESSION['error-message']);
                        }
                    ?>
                    <h3 class="card-title text-center">Sign Up</h3>
                    <form action="/signupForm.php" method="post">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter your contact number" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control" id="age" placeholder="Enter your age" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "../includes/footer.php";

?>
