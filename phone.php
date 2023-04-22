<?php include 'header.php';?>
<?php
include 'connection.php';


//get phone id from url

$id =  $_GET['id'];

//get phone data from the database
$sql = "SELECT * from products WHERE product_id ="."$id;";

$result = mysqli_query($con, $sql); 
$phone = $result->fetch_assoc();

?>
<body>
    

        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title"><?php echo $phone['brand'] ?></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="images/<?php echo $phone['brand']?>/<?php echo $phone['image']?>" data-zoom-image="images/<?php echo $phone['brand']?>/<?php echo $phone['image']?>" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery">
                                            <a class="product-gallery-item active" href="#product-zoom" data-image="images/<?php echo $phone['brand']?>/<?php echo $phone['image']?>" data-zoom-image="images/<?php echo $phone['brand']?>/<?php echo $phone['image']?>">
                                                
                                            </a>

                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?php echo $phone['name'] ?></h1><!-- End .product-title -->

                                   

                                    <div class="product-price">
                                    <?php echo '$'.$phone['price']?>
                                    </div><!-- End .product-price -->

                                    <div class="product-desc-content">
                                        <h3>Features: </h3>

                                        <ul>
                                            <li><?php echo $phone['processor'] ?></li>
                                            <li><?php echo $phone['camera'] ?></li>
                                            <li><?php echo $phone['display'] ?></li>
                                            <li><?php echo $phone['ram'] ?> </li>
                                            <li><?php echo $phone['storage'] ?></li>
                                            <li><?php echo $phone['battery'] ?></li>
                                        </ul>
    
                                    </div><!-- End .product-desc-content -->


                                    <div class="product-details-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-details-action -->

                                  
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Details</h3>
                                    <p><?php echo $phone['details'] ?>.</p>

                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Description</h3>
                                    <p><?php echo $phone['description'] ?>. </p>
                                    
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->

                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->


                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
</body>

<?php include 'footer.php';?>