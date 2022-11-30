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

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">Home <span>||</span></li>
                                <li class="list-inline-item"><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- About Area -->
        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wc-box text-justify">
                            <h4>Welcome to <span>THE PAK MARKET</span></h4>
                            <p>Pakistan Manufacturers Suppliers Exporters Directory, Pakistan Exporter Manufacturer <br>THE PAK MARKET a comprehensive B2B marketplace having over 6 years of expertise in digital branding and web development. The B2B Marketplace is currently welcoming all the <strong>manufacturers and suppliers </strong>all over Pakistan. <br>
                                The digital trading platform is intelligently designed and developed to address fierce business competition by providing a safe, fast, reliable and authentic medium of trading.<br> <strong>THE PAK MARKET</strong> is integrated with all new advance features and functionalities that have never been offered by any other B2B portal. To compete with aggressive marketing trends and brand development THE PAK MARKET is the only B2B portal helping millions of traders expressing their presence globally.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wc-img">
                            <img src="images/about.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row his-mis">
<!--
                            <div class="col-md-4">
                                <div class="about-bnr">
                                    <a href="#"><img src="images/banner-1.png" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-bnr">
                                    <a href="#"><img src="images/banner-2.png" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-bnr">
                                    <a href="#"><img src="images/banner-3-1.png" alt="" class="img-fluid"></a>
                                </div>
                            </div>
-->
                            <div class="col-md-6">
                                <div class="history text-justify">
                                    <h5>Our Goal</h5>
                                    <p>Our goal is to be your ultimate trading partner with safe and innovative trading solutions. With our well-define structure and effective strategy, <strong>THE PAK MARKET </strong>gives an opportunity to all business partners be it <strong>wholesaler, retailer, buyers, sellers</strong> and middlemen to do online safe trade dealings with each other irrelevant of any limitation to time or place. 	</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="history text-justify">
                                    <h5>Our Mission</h5>
                                    <p>Our Mission is to establish a fast and reliable trading platform that would work in the best interest of <strong>buyers and suppliers</strong>. The organization is focused in overcoming all B2B marketplace challenges and loop holes relentlessly, introducing trading transparency and utmost quality. Delivering unparalleled satisfaction and profitability with guaranteed is what we seek.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Main Body Area-->
        
        
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
