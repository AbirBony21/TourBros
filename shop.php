<?php

    $active='Shop';
    include("includes/header.php");

?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->

               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="home.php">Home</a>
                   </li>
                   <li>
                       <a href="shop.php">Shop</a>
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>
<section>
           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->

             <?php

                if(!isset($_GET['p_cat'])){

                    if(!isset($_GET['cat'])){

                      echo "

                       <div class='box '><!-- box Begin -->
                           <h1 class='text-primary'>Packages</h1>
                           <p class='text-primary'>
                               Add packages to your list with desired packages
                           </p>
                       </div><!-- box Finish -->

                       ";

                    }

                   }

               ?>
</section>
               <div class="row"><!-- row Begin -->

                   <?php

                        if(!isset($_GET['p_cat'])){

                         if(!isset($_GET['cat'])){

                            $per_page=6;

                            if(isset($_GET['page'])){

                                $page = $_GET['page'];

                            }else{

                                $page=1;

                            }

                            $start_from = ($page-1) * $per_page;

                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

                            $run_products = mysqli_query($con,$get_products);

                            while($row_products=mysqli_fetch_array($run_products)){

                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];

                                echo "

                                    <div class='col-md-4 col-sm-6 center-responsive'>

                                        <div class='product'>

                                            <a href='details.php?pro_id=$pro_id'>

                                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                                            </a>

                                            <div class='text'>

                                                <h3>

                                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>

                                                </h3>

                                                <p class='price text-primary'>

                                                    $$pro_price

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                        View Details

                                                    </a>

                                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> Add To list

                                                    </a>

                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                ";

                        }

                   ?>

               </div><!-- row Finish -->

               <center>
                   <ul class="pagination"><!-- pagination Begin -->
					 <?php

                    $query = "select * from products";

                    $result = mysqli_query($con,$query);

                    $total_records = mysqli_num_rows($result);

                    $total_pages = ceil($total_records / $per_page);

                        echo "

                            <li>

                                <a href='shop.php?page=1'> ".'First Page'." </a>

                            </li>

                        ";

                        for($i=1; $i<=$total_pages; $i++){

                              echo "

                            <li>

                                <a href='shop.php?page=".$i."'> ".$i." </a>

                            </li>

                        ";

                        };

                        echo "

                            <li>

                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>

                            </li>

                        ";

					    	}

						}

					 ?>

                   </ul><!-- pagination Finish -->
               </center>

                <?php

               getpcatpro();

               getcatpro();

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
