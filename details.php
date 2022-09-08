<?php

    $active='Cart';
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
                       Shop
                   </li>

                   <li>
                       <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->

                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
                                   </div>
                               </div>

                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->

                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->

                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center text-info"> <?php echo $pro_title; ?> </h1>

                           <?php add_cart(); ?>

                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label text-primary">Number of Persons</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option>
                                           <option>10</option>
                                           </select><!-- select Finish -->

                                    </div><!-- col-md-7 Finish -->

                               </div><!-- form-group Finish -->

                               <div class="form-group text-primary"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Group Type</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                       <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"><!-- form-control Begin -->

                                           <option disabled selected>Select Group Type</option>
                                           <option>Family</option>
                                           <option>Friends</option>
                                           <option>Colleagues</option>
                                           <option>Other</option>

                                       </select><!-- form-control Finish -->

                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->

                               <p class="price text-primary">$ <?php echo $pro_price; ?></p>

                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to List</button></p>

                           </form><!-- form-horizontal Finish -->

                       </div><!-- box Finish -->

                       <div class="row" id="thumbs"><!-- row Begin -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                       </div><!-- row Finish -->

                   </div><!-- col-sm-6 Finish -->


               </div><!-- row Finish -->

               <div class="box text-primary" id="details"><!-- box Begin -->

                       <h4>Package Details</h4>

                   <p>

                       <?php echo $pro_desc; ?>

                   </p>





                       <hr>

               </div><!-- box Finish -->

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center text-primary">Packages You May Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <?php

                    $get_products = "select * from products order by rand() LIMIT 0,3";

                    $run_products = mysqli_query($con,$get_products);

                   while($row_products=mysqli_fetch_array($run_products)){

                       $pro_id = $row_products['product_id'];

                       $pro_title = $row_products['product_title'];

                       $pro_img1 = $row_products['product_img1'];

                       $pro_price = $row_products['product_price'];

                       echo "

                        <div class='col-md-3 col-sm-6 center-responsive'>

                            <div class='product same-height'>

                                <a href='details.php?pro_id=$pro_id'>

                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                                </a>

                                <div class='text'>

                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>

                                    <p class='price text-primary'> $ $pro_price </p>

                                </div>

                            </div>

                        </div>

                       ";

                   }

                   ?>

               </div><!-- #row same-heigh-row Finish -->

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
      <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
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
      <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
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
