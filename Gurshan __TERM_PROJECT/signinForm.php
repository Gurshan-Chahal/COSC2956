<?php
    include "./includes/header.php";
    include "./db/conn.php";
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    If($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM user WHERE email_id='$email'";
        $result = mysqli_query($conn, $sql);
        if($result){
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                if($password===$row['password']){
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$email;
                    header("Location: ./php/home.php");
                }else{
                    $_SESSION['error-message']="Invalid Id or Password";
                    header('Location: /php/signin.php');
                }
                
            }
            else{
                $_SESSION['error-message']="No Such user found!";
                header('Location: /php/signin.php');
            }
        }
        else{                           
            echo "Error executing query: " . mysqli_error($conn);
        } 
    
    }
?>