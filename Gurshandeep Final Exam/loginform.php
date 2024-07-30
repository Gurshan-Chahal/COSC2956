
<?php 
    $title = "Login";
    require_once './includes/header.php';
    require_once './db/conn.php';
?>
<div class="container">
    <form action="login.php" method="post">
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputEmail4" class="form-label">Email</label>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" id="inputEmail4" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="col-md-4">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<?php 
    require_once "./includes/footer.php"
?>