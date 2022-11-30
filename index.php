<?php 
session_start();
include('include/conn.php');
include('include/function.php');
if(isset($_GET['msg']) and $_GET['msg'] =='Your Requirments are Submitted' )
{
 $msg=$_GET['msg'];   
} 
elseif(isset($_GET['msg']) and $_GET['msg'] =='Sorry Something Went Wrong')
{
    
   $msg=$_GET['msg'];
}
?>
<!doctype html>

<html class="no-js" lang="zxx">  
<?php 
    //Header section
    include('include/headerlinks.php'); 
    
    ?>

    <body>

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

        <!-- Slider Area -->
        <section class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="menu-widget">
                            <p><a href="allcategory.php" class="text-white"><i class="fa fa-bars"></i>All Categories</a></p>
                            <ul class="list-unstyled">
                                <li><a class="font-weight-bolder" href="allcategory.php">View All Categories<i class="fa fa-angle-right"></i></a></li>
                                <!-- All category Drop Down  -->
                              <?php  allcategory() ?>                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 padding-fix-l20">
                        <div class="owl-carousel owl-slider">
                            <?php 
                            sliderimage();
                            ?>
                            

                        </div>
                        <div class="slider-btm-box d-flex justify-content-around">
                            <div class="single-box mr-20">
                                <a href="#"><img src="images/sb-1.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="single-box mr-20">
                                <a href="#"><img src="images/sb-2.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="single-box">
                                <a href="#"><img src="images/sb-3.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider Area -->

        <!-- Product Area-->
        <section class="product-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bt-deal">
                                    <div class="sec-title">
                                        <h6>Best Deals</h6>
                                    </div>
                                    <div class="bt-body owl-carousel">
                                    <?php 
                                        bestdeals();
                                        bestdeals();
                                        ?>  
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ht-offer">
                                    <div class="sec-title">
                                        <h6>Hot Offer</h6>
                                    </div>
                                    <div class="ht-body owl-carousel">
                                         <?php 
                                        hotoffers();
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="hm-test">
                                    <div class="test-body owl-carousel">
                                        <div class="test-item text-center">
                                            <img src="images/Abdullah Saqib.jpeg" alt="" class="img-fluid">
                                            <h6>Abdullah Saqib</h6>
                                            <span>Ceo "SOCKOYE"</span>
                                            <p>"The fastest method for a buyer to discover a seller or a vendor is through the internet. "THE PAK MARKET fitted the bill because it allowed online discovery and offline assistance"</p>
                                        </div>
                                        <div class="test-item text-center">
                                            <img src="images/Umar Sajjad.jpeg" alt="" class="img-fluid">
                                            <h6>Umar Sajjad</h6>
                                            <span>Ceo "Umar Sajjad Cotton Industry"</span>
                                            <p>"The enquiries received by the company is increased by 5X since their association with THE PAK MARKET. "This platform has helped us increase our online presence and penetrate the world market"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="top-rtd">
                                    <div class="sec-title">
                                        <h6>Top Sales Products</h6>
                                    </div>
                                    <div class="rt-slider owl-carousel">
                                    <?php 
                                        mostsales();
                                        mostsales();
                                        
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-md-12 padding-fix-l20">
                                <div class="ftr-product">
                                    <div class="tab-box d-flex justify-content-between">
                                        <div class="sec-title">
                                            <h5>Feature Product</h5>
                                        </div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                                            <div class="tab-slider owl-carousel">
                                                <?php
                                                featureproducts(); 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="requirmentform" class="col-md-12 padding-fix-l20">
                                <div class="ftr-product">
                                    <!-- Tab panes -->
                                     <?php 
                                        //Header section
                                        include('include/requirmentformhtml.php'); 
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="banner-two">
                                    <a href="#">
                                       
                                       <?php bannerimage1(); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="new-product">
                                    <div class="sec-title">
                                        <h5>New Product</h5>
                                    </div>
                                    <div class="new-slider owl-carousel">
                                        <?php
                                        newproducts();
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="banner-two">
                                    <a href="#">
                                        
                                       <?php bannerimage2(); ?>
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="top-slr">
                                    <div class="sec-title">
                                        <h5>All products</h5>
                                    </div>
                                    <div class="slr-slider owl-carousel">
                                         <?php 
                                        allproducts();
                                        allproducts();
                                        allproducts();
                                        allproducts();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                      <!-- Brand Area -->
                    <?php 
                    
                        include('include/brand.php') 
                    ?>

                <!-- End Brand Area -->
                    
                    
                    
                </div>
            </div>
        </section>
        <!-- End Product Area -->

        <!-- Footer Area -->
        <?php 
            //Header section
            include('include/footer.php') 
        ?>
        
        <!-- End Footer Area -->


        <!-- =========================================
        JavaScript Files-->

             <?php 
            //Header section
            include('include/footerlinks.php') ;
        ?>


    </body>

</html>
