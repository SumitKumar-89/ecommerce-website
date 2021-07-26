<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: sumit1.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Sarvesu Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/sum.css"  rel="stylesheet" type="text/css">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>The Best Fashion Store.</h1>
                            <p>Flat 25% OFF on premium brands </p>
                            <br/>
                            <a  href="productshop.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="productshop.php#cameras" >
                            <div class="thumbnail">
                                <img src="img1/phones.jpeg" alt="">
                                <div class="caption">
                                    <h3>Smartphones</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="productshop.php#watches" >
                            <div class="thumbnail">
                                <img src="img1/watch.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="productshop.php#shirts" >
                            <div class="thumbnail">
                                <img src="img1/shirts.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="productshop.php#cameras" >
                            <div class="thumbnail">
                                <img src="img1/lap.jpg" alt="">
                                <div class="caption">
                                    <h3>Laptop</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="productshop.php#watches" >
                            <div class="thumbnail">
                                <img src="img1/hhh.jpg" alt="">
                                <div class="caption">
                                    <h3>Headphones</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4"> 
                        <a href="productshop.php#shirts" >
                            <div class="thumbnail">
                                <img src="img1/jeans.jpg" alt="">
                                <div class="caption">
                                    <h3>Jeanss</h3>
                                    <p>Our exquisite collection of Jeans.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>