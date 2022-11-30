<?php session_start();
include('include/function.php');
include('include/conn.php');
if(isset($_POST['searchbtn']))
{

	$search = $_POST['searchbox'];
   
    
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<?php 
    //Header section
    include('include/headerlinks.php') 
    ?>
    <body>
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
                                <li class="list-inline-item"><span>||</span> Search Result</li>
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
                    <div class="col-md-3"> 
          
                        
                        <div class="cat-brand">
                            <div class="sec-title">
                                <h6>
                                    Categories
                                </h6>
                            </div>
                            <div class="brand-box">
                                <ul class="list-unstyled">
                                    <?php 
                                    
                                            productCategoryList();
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="cat-brand">
                            <div class="sec-title">
                                <h6>
                                    SubCategories
                                </h6>
                            </div>
                            <div class="brand-box">
                                <ul class="list-unstyled">
                                    <?php 
                                    
                                            productSubcategoryList();
                                        
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-tag">
                            <div class="sec-title">
                                <h6>Product Tag</h6>
                            </div>
                            <div class="tag-box">
                                <a href="#">Shirt</a>
                                <a href="#">Smartphone</a>
                                <a href="#">Camera</a>
                                <a href="#">Pant</a>
                                <a href="#">Glass</a>
                                <a href="#">Smart Led Tv</a>
                                <a href="#">Watch</a>
                                <a href="#">Micro Oven</a>
                                <a href="#">Toy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-box">
                            <div class="cat-box d-flex justify-content-between">
                                <!-- Nav tabs -->
                                <div class="view">
                                    <ul class="nav nav-tabs" role="tablist">
                                    </ul>
                                </div>

                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel">
                                    <div class="row">
                                       <?php 
                                        
                                        if(isset($search) )
                                        {
                                            
                                           searchresults($search);
                                        }
                                        
                                        ?>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->

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
        
        <!-- End Body Area -->

        <!-- Footer Area -->
        <?php 
            //Header section
            include('include/footer.php') 
        ?>
        
        <!-- End Footer Area -->


        <!-- =========================================
        JavaScript Files
        ========================================== -->

             <?php 
            //Header section
            include('include/footerlinks.php') 
        ?>


    </body>

</html>
<?php
    }else
{
    header("location:index.php");
}                        
    ?>