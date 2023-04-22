<?php
include 'connection.php';
session_start();
if(isset($_SESSION['register_email']))
{
    $email = $_SESSION['register_email'];
    if (isset($_POST['edit'])) {
        $password = $_POST['password'];
        $update = "update users set register_password='$password' where register_email='$email' ";
        $run = mysqli_query($con, $update);
        if ($run)
        {echo "<script>alert('the password is updated')</script>";

            echo "<script>window.open('index.php#signin-modal','_self')</script>";}
            else {
                echo "<script>alert('erorr')</script>";
            }
    }
}
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="author" content="p-themes">
    <link rel="stylesheet" href="forget.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="forget_password" >
    <div class="form">
            <div class="groub">
            <form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

        <div class="form-group" style="margin:20px;"><!-- form-group Starts -->

        <label> New password:</label>

        <input type="text" name="password"  class="form-control" required >

        </div><!-- form-group Ends -->
        <div class="position" style="display:flex; justify-content:center;">
        <button name="edit" style="text-align:center; border: none; border-radius: 30px; padding: 5px 70px; background:#d6d5e1; outline: none" >Updat_pasword</button>
        </button>
        </div>
        </div><!-- text-center Ends -->

            
         </div>
    </div>
</div>
</body>