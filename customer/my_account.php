<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourbros.</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    
    <link rel="stylesheet" href="styles/style.css">

     <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    





    
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
               
               </a>
               <a href="checkout.php"> <?php items(); ?> Packages in your list | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="my_account.php">My Account</a>
                   </li>
                   <li>
                       <a href="../cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                       
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                         ?>
                       
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
           <a href="home.php" class="logo">tourbros.</a>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="../home.php">Home</a>
                       </li>
                       <li>
                           <a href="../shop.php">Packages</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">My Account</a>
                       </li>
                       <li>
                           <a href="../cart.php">Booking</a>
                       </li>
                       <li>
                           <a href="../contactus.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Packages </span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
              
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                   if (isset($_GET['my_orders'])){
                       include("my_orders.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['pay_offline'])){
                       include("pay_offline.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['edit_account'])){
                       include("edit_account.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['change_pass'])){
                       include("change_pass.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['delete_account'])){
                       include("delete_account.php");
                   }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
  <!-- footer section starts  -->

<section class="footer">

<div class="box-container1">

   <div class="box1">
      <h3>Quick Links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
      <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
      <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
   </div>

   <div class="box1">
      <h3>Extra Links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> About us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
   </div>

   <div class="box1">
      <h3>Contact Info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +01733110068 </a>
      <a href="#"> <i class="fas fa-phone"></i> +01733110064 </a>
      <a href="#"> <i class="fas fa-envelope"></i> bony@gmail.com </a>
      <a href="#"> <i class="fas fa-envelope"></i> raffin@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> Mirpur, Dhaka - 1216 </a>
   </div>

   <div class="box1">
      <h3>Follow Us</h3>
      <a href="https://www.facebook.com/Tour-Bros-104334389091188" target="_blank"> <i class="fab fa-facebook-f"></i> Facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
   </div>

</div>

<div class="credit"> Created by <span>AB & DM</span> | All rights reserved! </div>

</section>

<!-- footer section ends -->
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>