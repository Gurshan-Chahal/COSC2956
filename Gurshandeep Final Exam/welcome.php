<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: loginform.php');
    exit();
}
?>

<?php $title = 'Welcome'; include('includes/header.php'); ?>
<div class="container">
   
