<!DOCTYPE html>
 
<?php
include 'connection.php';

if (isset($_POST['admain']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $get = "select * from admins where  name= '$name'";
    $query = mysqli_query($con, $get);
    if(mysqli_num_rows($query)>0)
    {
      $row=  mysqli_fetch_array($query);
      if ($row["pass"] == $pass) {
         
          echo '<script>alert("login as admin success ");</script>';
          echo "<script>window.open('sengy.php','_self')</script>";
  
      }
      else{
          echo '<script>alert("wrong password please try again");</script>';
      }
    }
    else{
      echo '<script>alert("you are not admin ");</script>';
      echo "<script>window.open('index.php','_self')</script>";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="author" content="p-themes">
    <link rel="stylesheet" href="admin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="adlogin" >
    <div class="formad">
       <div class="groubad">
       <div class="profile-img" >
            <img src="mm.jpeg" alt="profile_img" height="200px" width="200px;">
          </div>
       <form method="POST">
            <div class="form-group1">
              <input type="text" class="form-control" name="name" placeholder="Username">
            </div>
            <div class="form-group2">
              <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <div class="form-group3" style="display:flex; justify-content:center;">
              <button name="admain" style="size: 50px; padding: auto; width:200px;border: none; border-radius: 30px;"class="btn btn-primary btn-lg btn-block ">Sign In</button>
            </div>
            
          </form>
            
         </div>
    </div>
 </div>
</body>
</html>