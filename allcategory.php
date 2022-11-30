<?php 
session_start();
include('include/conn.php');
include('include/function.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<?php 
    //Header section
    include('include/headerlinks.php') 
    ?>
    <body>

        <!-- Preloader -->
<!--
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
-->
        <!-- End Preloader -->

        <!-- Top Bar -->
        <?php 
            //Header section
            include('include/topbar.php') 
        ?>
        <!-- End Top Bar -->

        <!-- Logo + Cart Area -->
        <?php 
            //Header section
            include('include/logoarea.php') 
        ?>
        <!-- End Logo + Cart Area -->

        <!-- Menu Area -->
        <?php 
            //Header section
            include('include/menubar.php') 
        ?>
        <!-- End Menu Area-->


        <!-- Main Body Area-->
        
        
        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span>All Categories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        
        
        <!-- Category Area -->
        <section class="category">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <h2 class="text-center mb-5">All Categories And SubCategories</h2>
                    </div>
                    <div class="col-md-1">     
                    </div>
                    
                    <div class="col-md-10">
                        <div class="product-box">
                           
                            <!-- Tab panes -->
                            <div class="product-area">
                                  <div class="col-md-12">
                                      <div class="row">
                                          
                                      <?php 
                                        allcategories();
                                    ?>
                                      
                                        </div>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-1"> 
                   
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->

        
        
        <!-- End Body Area -->
        <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container-fluid">
                <div class="row">
                   
                      <!-- Brand Area -->
                    <?php 
                    
                        include('include/brand.php') 
                    ?>

                <!-- End Brand Area -->
                </div>
            </div>
        </section>
        <!-- End Brand area 2 -->
        <!-- Footer Area -->
        <?php 
            //Header section
            include('include/footer.php') 
        ?>
        
        <!-- End Footer Area -->


        <!--
        JavaScript Files

        -->

             <?php 
            //Header section
            include('include/footerlinks.php') 
        ?>
    

    </body>

</html>
