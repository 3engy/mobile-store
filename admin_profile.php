<!DOCTYPE html>
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
                            <img src="mm.jpeg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                   <?php
                                   
                                       echo "Engy Salah";
                        
                                   ?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
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
                                                echo "6000";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                               
                                                   echo "Engy";
                                            
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                            
                                                echo "sengy9069@gamil.com";
                                           
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                                echo "01116487064";
                                                ?>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                                echo "toukh";
                                                ?>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>National id</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                               
                                                   echo "30209231400347";
                                              
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