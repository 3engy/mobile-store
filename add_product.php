<!DOCTYPE html>
<?php
include 'connection.php';
if (isset($_POST["admain"]))
 {
  $brand = $_POST['brand'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $camera = $_POST['camera'];
  $processor = $_POST['processor'];
  $ram = $_POST['ram'];
  $display = $_POST['display'];
  $storage = $_POST['storage'];
  $description = $_POST['description'];
  $battery = $_POST['battery'];
  $details = $_POST['details'];
  $c_image = $_FILES['image']['name'];
  $c_image_tmp = $_FILES['image']['tmp_name'];
  $allowedExtensionts = array('jpg', 'png', 'jpeg', 'webp', 'JPG', 'PNG', 'JPEG', 'WEBP');
  $c_image_extension = end(explode('.', $c_image));
  $select = "select * from products where name='$name'";
  $query = mysqli_query($con, $select);
  if (mysqli_num_rows($query) > 0)
   {
    echo '<script>alert("product already exists please enter another product");window.location.assign("admain.php");</script>';
  }
   else
    {
    if (in_array($c_image_extension, $allowedExtensionts)) 
    {
      move_uploaded_file($c_image_tmp,"images/$brand/$c_image");
      $insert = "insert into
        products
        (image,brand,name,price,processor,camera,display,ram,storage,battery,description,details) 
        values
        ('$c_image','$brand','$name','$price','$processor','$camera','$display','$ram','$storage','$battery','$description','$details')";
      $query2 = mysqli_query($con, $insert);
      if ($query2) {
        
        echo '<script>alert("insert sucssful");</script>';
        echo "<script>window.open('sengy.php','_self')</script>";
      }
    } 
     else {
      echo "<script>alert('the extension is not correct ')</script>";
      echo "<script>wind.open('sengy.php','_self')</script>";

    }
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
    <link rel="stylesheet" href="add_product.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="adlogin" >
    <div class="formad">
       <div class="groubad">
       <form method="POST" enctype="multipart/form-data">
            <div class="form-group" >
              <input type="text"  class="form-control" name="brand" placeholder="brand like Samsung">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="name like Samsung Galaxy A53">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="price" placeholder="price like 2000">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="camera" placeholder="camera like Main Camera Quad 64MP, 12MP, 5MP, 5MP">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="processor" placeholder="processor like CPU, Octa-core (2.4 GHz & 2.0 GHz)">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="ram" placeholder="ram like  8GB RAM">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="display" placeholder="display like 6.5 inches, Super AMOLED, 120Hz (1080 x 2400 pixel..">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="storage" placeholder="storage like 128GB">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="battery" placeholder="battery like Li-Po 5000 mAh, non-removable">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="description" placeholder="description like Feast your eyes on vibrant details with the FHD+ S...">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="details" placeholder="details like Android 12, One UI 4.1 CPU, Octa-core (2.4 GHz & 2.. ">
            </div>
                <div>
                   <label for="img">Select image:</label>
                   <input type="file" id="img" name="image">
                 </div>
              </div>
                <div class="form-group3" style="display:flex; justify-content:center;">
              <button name="admain" style="size: 50px; padding: auto; width:200px;border: none; border-radius: 30px;"class="btn btn-primary btn-lg btn-block ">add</button>
               </div> 
          </form>  
         </div>
    </div>
 </div>
</body>
</html>