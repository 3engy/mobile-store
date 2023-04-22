<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
if (isset($_SESSION['register_email']))
{
    $register_email = $_SESSION['register_email'];
    $getdata="select * from users where register_email='$register_email'";
    $run_data = mysqli_query($con, $getdata);
    $row_data = mysqli_fetch_array($run_data);
    $id = $row_data['user_id'];
    $register_email=$row_data["register_email"];
    $first_name=$row_data["first_name"];
    $last_name=$row_data["last_name"];
    $SSN=$row_data["SSN"];
    $address=$row_data["address"];
    $phone=$row_data["phone"];
    $image=$row_data["my_image"];
}  
if (isset($_POST['btn_edit']))
{
    echo "<script>window.open('updatedata.php','_self')</script>";
}    
if (isset($_POST['file']))
{
    echo "<script>window.open('updatedata.php','_self')</script>";
}     
if(isset($_POST['file']))
{
    echo "<script>window.open('admin.php','_self')</script>";
}            
?>
<html>
 <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="my_profile.css">
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/<?php echo $image; ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                   <?php
                                   
                                       echo $first_name." ". $last_name ;
                        
                                   ?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btn_edit" value="Edit Profile"/>
                    </div>
                </div>
                <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                echo $id;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                               
                                                   echo $first_name;
                                            
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                            
                                                echo $register_email;
                                           
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                                echo $phone;
                                                ?>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                                echo $address;
                                                ?>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>National id</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                               
                                                   echo $SSN;
                                              
                                                ?>
                                            </div>
                                        </div>  
                                        <div>
                        </div>
                    </div>
                </div>
                <div class="row"  >
                    <div class="position" style="display:flex; justify-content:center;">
                    <button style="text-align:center; border: none; border-radius: 30px; padding: 5px 90px; background:#d6d5e1; outline: none" ><a href="logout.php" >log_out</a></button>   
                    </div>                
                </div> 
            </form>           
        </div>
 </body>
 </html>