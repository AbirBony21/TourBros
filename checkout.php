<?php 

    $active='Account';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
           
           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");
               
           }else{
               
               include("payment_options.php");
               
           }
           
           ?>
           
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