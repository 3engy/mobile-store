
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
	$register_password=$row_data["register_password"];
    

}  
if (isset($_POST['update']))
 {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$register_password = $_POST['register_password'];
	$update = "update users set register_password ='$register_password',address ='$address',phone ='$phone',first_name ='$first_name',last_name ='$last_name' where register_email='$register_email'";
	$run = mysqli_query($con, $update);
	if ($run)
	{echo "<script>alert('the data is updated')</script>";

		echo "<script>window.open('my_profile.php','_self')</script>";
	}
	else{
			echo "<script>alert('erorr')</script>";
		}
		
}
    
?>
<!DOCTYPE html>
<html>
 <head>
<link href="//cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css" rel="stylesheet" id="bootstrap-css">
<script src=""></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
 </head>
<body class="columns" style="margin: 10px 25px;">
	<div class="column is-4">
		<article class="message is-info">
  			<div class="message-header ">
				<h2>Editar Usuario</h2>
    		</div>
		  <div class="message-body field">
			  <form method="post" enctype="multipart/form-data">
				  <div class="columns">
					  <div class="column">
						  <label for="nombre" class="label">Email can,t change it: </label>
						  <div class="control">
							  <input type="email" class="input" name="register_email"  value='<?php echo $register_email ?>'>
						  </div>
					  </div>
				  </div>
				  <div class="columns">
					  <div class="column">
						  <label for="usuario" class="label">new password: </label>
						  <div class="control has-icons-left">
							  <input type="text" class="input" name ="register_password" value='<?php echo $register_password ?>'>
							  
						  </div>
					  </div>
				  </div>
				  <div class="columns">
					  <div class="column">
						  <label for="email" class="label">first name: </label>
						  <div class="control">
							  <input type="text" class="input" name ="first_name" value='<?php echo $first_name ?>'>
						  </div>
					  </div>
					  <div class="column">
						  <label for="tel" class="label">last name: </label>
						  <div class="control">
							  <input type="tel" class="input" name ="last_name" value='<?php echo $last_name ?>'>
						  </div>
					  </div>
				  </div>
                  <div class="columns">
					  <div class="column">
						  <label for="usuario" class="label">new phone: </label>
						  <div class="control has-icons-left">
							  <input type="text" class="input" name="phone"  value='<?php echo $phone ?>'>
							  
						  </div>
					  </div>
				  </div>
                  <div class="columns">
					  <div class="column">
						  <label for="usuario" class="label">new adress: </label>
						  <div class="control has-icons-left">
							  <input type="text" class="input"  name="address"  value='<?php echo $address ?>'>
							  
						  </div>
					  </div>
				  </div>
				 
                  <div style="display:flex; justify-content:center;">
                    <button style="text-align:center; border: none; border-radius: 30px; padding: 5px 90px; background:#d6d5e1; outline: none"  name ="update"> update data </button>
            
				</div>
				  </form>
				  </div>
				 
			  </form>
		  </div>
	</div>
</body>
</html>