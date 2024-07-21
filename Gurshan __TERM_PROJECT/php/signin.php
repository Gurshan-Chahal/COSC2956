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
<?php

include "../includes/header.php";
session_start();
if(isset($_SESSION['loggedin'])){
    echo '<div class="container mt-5 d-flex justify-content-center align-items-center h-100">
                <h1 class="mt-5 bg-dark p-5 text-center text-warning">User already logged in!</h1>
            </div>';
    exit();
}

?>


<div class="container mt-5">
    <div class="row justify-content-center">
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
                    <h3 class="card-title text-center">Login</h3>
                    <form action="/signinForm.php" method="post">
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "../includes/footer.php";

?>
