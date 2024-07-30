<?php 
$title = "Lab Solutions";
require_once "./includes/header.php";
session_start();
if(!isset($_SESSION["login"])){
$_SESSION["login"] = false;
}
?>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<h1 class="text-danger text-center">Lab Solutions</h1>
</div>
</div>
</div>
<?php 
require_once "./includes/footer.php";
?>
