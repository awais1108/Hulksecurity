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
