<!DOCTYPE html>
 
<?php
include 'connection.php';
session_start();

if (isset($_POST['foregt']))
{
    $register_email=$_POST["register_email"];
    $SSN=$_POST["SSN"];
    $get_admin = "select * from users where register_email = '$register_email' and SSN = '$SSN'";
    $run_admin = mysqli_query($con, $get_admin);
    $check_admin = mysqli_num_rows($run_admin);
    if ($check_admin==0){
        echo "<script>alert('login in vaild ')</script>";

    } else {
        $_SESSION['register_email'] = $register_email;

        echo "<script>alert('login sucsessful ')</script>";
        echo "<script>window.open('update.php','_self')</script>";
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
            <section style="margin-top:80px;padding: 10px;">
                        <div class="row justify-content-between form-outline">
                            <div class=" mb-4 col-md-6">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="register_email" class="form-label text-dark">email *</label>
                                        <input type="email" class="form-control" id="register_email" name="register_email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="Nation-id" class="form-label text-dark">Nation Id *</label>
                                        <input type="number" class="form-control" id="Nation-id" name="SSN" required>
                                    </div><!-- End .form-group -->
                                        
                                        <button type="submit"  name = "foregt"style="border: aliceblue;" style="padding: 10px;" >
                                            <span>Continue</span>
                                        </button>
                                </form>
                                    <p style="color: black;">
                                    </p>
                                </form>

                        
                                </form>
                            </div>
                        </div>

                </section>
         </div>
    </div>
 </div>
</body>
</html>