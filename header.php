<!DOCTYPE html>
<?php include 'connection.php';
session_start();


?>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobile Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
</head>


    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                    <?php
                                    if (isset($_SESSION['register_email']))
                                    {
                                        
                                        echo '<a href="my_profile.php">'.$_SESSION['register_email'].'</a>';
                                    }
                                    else {
                                        echo   '<a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>';
                                    }
                                    ?>



                                       </li>

                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                        
                    </div><!-- End .header-right -->
                    
                </div><!-- End .container -->
                
            </div><!-- End .header-top -->
            <?php
            if (isset($_POST['asad']))
            {
                echo "<script>window.open('admin.php','_self')</script>";
            }
            ?>
            <div>
            <form method ="post">
            <button name= "asad" style="text-align:center; border: none; border-radius: 30px; padding: 5px 90px; background:#d6d5e1; outline: none">login as admain</button>
            </form>
        </div>    
            <div class="header-middle">
                <div class="container">

                   
                    <div class="header-right">
                        <div class="wishlist">
                            <a href=<?php echo '"wishlist.php"';?> title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge">3</span>
                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->
                                <div class="dropdown-cart-action">
                                    <a href=<?php echo '"View_Cart.php"';?> class="btn btn-primary" name="View_Cart">View Cart</a>
                                    <a href=<?php echo '"checkout.php"';?> class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    
                <?php echo '

<div class="header-right">
    <nav class="main-nav">
        <ul class="menu sf-arrows">
            <li class="megamenu-container active">
                <a href="index.php" class="nav-link text-Black">Home</a>
            </li> <!-- nav Home -->
';?>
            <li>
                <a class="sf-with-ul">Phone</a>
<?php echo '
                <div class="megamenu megamenu-sm">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="menu-col">
                                <div class="menu-title">Brands</div><!-- End .menu-title -->
                                <ul>
                                    <li><a href="shope.php?brand=Apple">Apple</a></li>
                                    <li><a href="shope.php?brand=Honor">Honor</a></li>
                                    <li><a href="shope.php?brand=Xiaomi"><span>Xiaomi<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="shope.php?brand=Huawei">Huawei</a></li>
                                    <li><a href="shope.php?brand=Infinix">Infinix</a></li>
                                    <li><a href="shope.php?brand=Lenovo">Lenovo</a></li>
                                    <li><a href="shope.php?brand=Nokia">Nokia</a></li>
                                    <li><a href="shope.php?brand=Realme">Realme</a></li>
                                    <li><a href="shope.php?brand=Samsung">Samsung</a></li>
                                    <li><a href="shope.php?brand=Sony">Sony</a></li>
                                    <li><a href="shope.php?brand=Lava">Lava</a></li>
                                    <li><a href="shope.php?brand=HTC">HTC</a></li>
                                </ul>
                            </div><!-- End .menu-col -->
                        </div><!-- End .col-md-6 -->
';?>
                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                    <img src="assets/images/menu/banner-2.jpg" alt="Banner">
                                    
                                    <div class="banner-content banner-content-bottom">
                                        <div class="banner-title text-Black"><br><span><strong>SmartPhones</strong></span></div><!-- End .banner-title -->
                                    </div><!-- End .banner-content -->
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .megamenu megamenu-sm -->
            </li>
            <li>
                <a class="sf-with-ul">Accessories</a>
<?php echo '
                            <ul>
                                
                                <li><a href="shope.php?brand=powercharege">Power & Charege</a></li>
                                <li><a href="shope.php?brand=smartthings">SmartThings</a></li>
                                <li><a href="shope.php?brand=s-pens">S-Pens</a></li>
                            </ul>
                
                            </li>
                            
                            <li>
                                <a href="about.php" class="nav-link text-Black">About</a>
                            </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-center -->
';?>     
                            <div class="header-right">
                                <i class="la la-lightbulb-o"></i><p>Welcome to our<span class="highlight">&nbsp;Mobile Shop</span></p>
                            </div>
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
        </header><!-- End .header -->
 <!-- Sign in / Register Modal -->
 <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <?php

                                    /*login code*/
                                    if(isset($_POST["signin"]))
                                    {
                                        $register_email=$_POST["register_email"];

                                        $register_password=$_POST["register_password"];

                                        $select="select * from users where  register_email='$register_email' ";
                                        $query=  mysqli_query($con, $select);
                                        if(mysqli_num_rows($query)>0)
                                        {
                                            $row=  mysqli_fetch_array($query);
                                            if ($row["register_password"] == $register_password) {
                                                $_SESSION['register_email'] = $register_email;
 
                                                echo '<script>alert("welcome");window.location.assign("my_profile.php");</script>';
                                        
                                            }
                                            else{
                                                echo '<script>alert("wrong password please try again");</script>';
                                            }
                                        }
                                        else{
                                            echo '<script>alert("email does not exist please sign up")</script>';
                                        }

                                    }
                                    ?>
                                    <form  method="post">
                                        <div class="form-group">
                                            <label for="register_email">Username or email address *</label>
                                            <input type="email" class="form-control" id="register_email" name="register_email" required>
                
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register_password">Password *</label>
                                            <input type="password" class="form-control" id="register_password" name="register_password" required>
                                            
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                           
                                            <button type="submit" class="btn btn-outline-primary-2" name= "signin" style="margin-left: 5px;">
                                                <span>SIGN In</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <a href="forget.php" style="margin-left: 60px;">Forget password </a>
                                        </div>


                                    </form>
                                    
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <?php
                                    /**  register   اكوادي من اول هنا كده */
                                    
                                    if(isset($_POST["signup"]))
                                    {
                                        $register_email=$_POST["register_email"];
                                        $register_password=$_POST["register_password"];
                                        $first_name=$_POST["first_name"];
                                        $last_name=$_POST["last_name"];
                                        $SSN=$_POST["SSN"];
                                        $phone = $_POST["phone"];
                                        $address=$_POST["address"];
                                        $c_image = $_FILES['my_image']['name'];
                                        $c_image_tmp = $_FILES['my_image']['tmp_name'];
                                        $allowedExtensionts = array('jpg','png','jpeg','webp','JPG','PNG','JPEG','WEBP');
                                        $c_image_extension = end(explode('.',$c_image));
                                        $select = "select * from users where  register_email='$register_email'";
                                        $query=  mysqli_query($con, $select);
                                        if (mysqli_num_rows($query) > 0) {
                                            echo '<script>alert("email already exists please enter another email ");window.location.assign("index.php");</script>';
                                        }
                                        else{
                                            if (in_array($c_image_extension, $allowedExtensionts)) {
                                                move_uploaded_file($c_image_tmp,"images/$c_image");
                                                $insert = "insert into
                                                 users
                                                 ( register_email, register_password, first_name, last_name, SSN,phone, address,my_image) 
                                                 values
                                                 ('$register_email','$register_password', '$first_name', '$last_name', $SSN, $phone, '$address','$c_image')";
                                                $query2 = mysqli_query($con, $insert);
                                                if($query2)
                                                {
                                                    echo "<script>alert('Register sucssesful go to login ')</script>";
                                                    echo "<script>wind.open('index.php','_self')</script>";
                                                }
                                            }
                                            else{
                                                echo "<script>alert('the extension is not correct')</script>";
                                                echo "<script>wind.open('#','_self')</script>";
                    
                                
                                            }
                                        }
                                    }
                                    ?>
                                    

                                    <form  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="register_email">Your email address *</label>
                                            <input type="email" class="form-control" id="register_email" name="register_email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register_password">Password *</label>
                                            <input type="password" class="form-control" id="register_password" name="register_password" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="first_name">First_name*</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="last_name">Last_name*</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="SSN">SSN*</label>
                                            <input type="number" class="form-control" id="SSN" name="SSN" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">adress*</label>
                                            <input type="text" class="form-control" id="address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">phone*</label>
                                            <input type="text" class="form-control" id="address" name="phone" required>
                                        </div>
                                          <div>
                                          <label for="img">Select image:</label>
                                            <input type="file" id="img" name="my_image">
                                            </div>
                                

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2" name= "signup">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->