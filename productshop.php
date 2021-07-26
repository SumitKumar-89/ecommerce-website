<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Sarvesu Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/proshop.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

.feature{
    min-height: 100vh;
    background:linear-gradient(165deg, #fff 50%, var(--blue) 50.1%);
    padding-bottom: 2rem;
}
.feature .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
    margin:3rem auto;
    width: 95%;
    background:#fff;
    box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
    border-radius: 1rem;
}

.feature .row .image-container{
    display: flex;
    align-items: center;
}

.feature .row .image-container .big-image img{
    height: 30rem;
    margin:2rem 0;
    filter: drop-shadow(0 .1rem .5rem #000);
}

.feature .row .image-container .small-image{
    display: flex;
    justify-content: center;
    flex-flow: column wrap;
}

.feature .row .image-container .small-image img{
    height:6rem;
    padding: 1rem;
    margin:1rem;
    border:.1rem solid #666;
    cursor: pointer;
}

.feature .row .content{
    padding-left: 6rem;
}

.feature .row .content h3{
    font-size: 4rem;
    color:var(--blue);
}

.feature .row .content .stars i{
    font-size: 2rem;
    color:orange;
    padding: 1rem 0;
}

.feature .row .content .stars span{
    font-size: 2rem;
    color:#666;
}

.feature .row .content p{
    color:#333;
    width: 40rem;
    font-size: 2rem;
    padding: 2rem 0;
}

.feature .row .content .price{
    color:#ff3300;
    font-size: 2rem;
}

.feature .row .content .price span{
    color:#666;
    text-decoration: line-through;
    font-size: 1.5rem;
}

.feature .row .content .btn{
    margin-left: 2rem;
}

#login-panel .panel-footer{
    font-weight:normal;
}

footer {
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
}


        </style>
    </head>

    <body>
        <?php
        include 'includes/productheader.php';
        include 'includes/check-if-added.php';
        ?>
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1> Welcome To India's Biggest <a href="fashion.php"> Fashion</a>
                            and<a href="mobiles.php"> Electronics</a> Store!</h1>
                            <h3>Flat 40% Off</h3>
                            <p>+ Free shipping on 1St order</p>
                            <br/>
                            
                        </div>
                    </center>
                </div>
            </div><br><br><br>
<!-- featured section starts  -->

<section class="feature" id="featured">

<h1 align="center">Featured product</h1>

<div class="row">

    <div class="image-container">

        <div class="big-image">
         <a href="sumit.php" ><img src="img1/watch1.jpg" alt=""></a>
        </div>

       

    </div>

    <div class="content">

        <h3>smart watches</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        
            <span>(500+) reviews</span>
        </div>
        <p>Wide range of selection from Digital, Analog, Sports watches. Top Collections!</p>
        <strong class="price">₹1000 <span>₹1500</span> </strong>
      
        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
    </div>
   
</div>
      <img src="img1/happy12.jpg" alt="", width="98%%">


        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
