
<?php include 'header.php';?>
<?php
$option=null;

if(isset($_POST['option']))
{
    $option=$_POST['option'];
    if ($option == "add") {
        if (!isset($_SESSION['register_email'])) {
            echo '<script>alert("Please Sign in");window.location.assign("index.php");</script>';
        }
        else
        {
            echo '<script>alert("Succefully");</script>';
        }
    }
}
include 'connection.php';
//get brand from url
$brand =$_GET['brand'];

// get product data from database
$sql = "SELECT product_id, name, image ,price FROM products WHERE brand ="." '$brand';";
$result = $con->query($sql);

?>

<body>
   
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title"><?php echo $brand?></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
        <section id="category" class="phones-gallary" data-nav="last-phones" name="last-phones" style="margin-top: 40px;">     
            <div class="page-content">
                <div class="container">
                    <div class="row w-100">
                		<div class="col-13">
                            <div class="products mb-3">
                                <div class="row justify-content-center">
                            <?php 
            while($row = $result->fetch_assoc()) {
                echo '
                            
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">

                                                <a href="phone.php?id='.$row['product_id'].'">
                                                    <img src="images/'."$brand".'/'.$row['image'].'" alt="'.$row['name'].'" class="m-2">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action" onclick="addProduct('.$row['product_id'].')">
                                                    <button  type="button"  class="btn-product btn-cart "><span>add to cart</span></button>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                '.$brand.'
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title">'.$row['name'].'</h3><!-- End .product-title -->
                                                <div class="product-price">
                                                $'.$row['price'].'
                                                </div><!-- End .product-price -->
                                              <!--  
                                                <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="images/'."$brand".'/'.$row['image'].'" alt="'.$row['name'].'" class="m-2">
                                                    </a>
                                                    <a href="#">
                                                        <img src="images/'."$brand".'/'.$row['image'].'" alt="'.$row['name'].'" class="m-2">
                                                    </a>

                                                    <a href="#">
                                                        <img src="images/'."$brand".'/'.$row['image'].'" alt="'.$row['name'].'" class="m-2">
                                                    </a>
                                                </div>
                                                 End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 -->
                                
            ';
        }
            ?>
                                </div><!-- End .row -->
                            </div><!-- End .products -->
                			



                            </div><!-- End .col-lg-9 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
    </setion>
        </main><!-- End .main -->

</body>

<script>
function addProduct(id) {
    <?php
    if (!isset($_SESSION['register_email'])) {
        echo "alert(\"Please Sign in\");";
    }
    else{
        echo "
            let quantity = $('.number-input').val();
            $.ajax({
                method: 'GET',
                url:'cart-function.php',
                data: {
                    product_id: id
                   
                },
                success: function(res) {
                    if (res == 200)
                        alert('added successfully');
                    else
                        alert(res);
                }
            })
        ";
    }
    ?>
}
</script>
<?php include 'footer.php';?>
