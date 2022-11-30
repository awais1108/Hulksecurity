<?php 
session_start();
include('include/conn.php');
include('include/function.php');
if(isset($_POST['submit']))
{
    if(!empty($_SESSION['uid']))
    {
        if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']))
        {
            $name=$_POST['name'];
            $subject=$_POST['subject'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            $uid=$_SESSION['uid'];
            $msg=contact($name,$subject,$email,$message,$uid);  
        }
    }else{
        $msg="Please Log In First"; 
    }
}

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
                                <li class="list-inline-item"><span>||</span> Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Contact -->
        <section class="contact-area">
            <div id="map"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                    	<div class="contact-box-tp">
                    		<h4>Contact Info</h4>
                    	</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Our Location</h6>
                                        <p>London,UK.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Email Address</h6>
                                        <p>info@hulksecurity.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Phone Number</h6>
                                        <p>+92-324-000000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-link">
                        	<ul class="list-unstyled list-inline">
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        	</ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                              <?php if(isset($msg) && $msg=="Message Successfully Sent !!"){ ?>
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $msg; ?></strong>
                            </div>
                         <?php  }if(isset($msg) && $msg=="Message Not Sent !!"){ ?>
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $msg; ?></strong>
                            </div>
                         <?php  } ?>
                            <h4>Get In Touch</h4>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{ echo "";} ?>" id="name" name="name" placeholder="Full Name" required=""></p>
                                     </div>
                                    <div class="col-md-6">
                                        <p><input type="email" id="email" name="email" value="<?php if(isset($_SESSION['login'])){echo $_SESSION['login'];}else{ echo "";} ?>" placeholder="Email" required=""></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="text" id="subject" name="subject" placeholder="Subject"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><textarea name="message" id="message" placeholder="Message" required=""></textarea></p>
                                    </div>
                                    <div class="col-md-12">
                                        <?php
                                        if(isset($_SESSION['uid']))
                                            { 
                                        ?>
                                        <button name="submit" type="submit">Send Message</button>
                                        
                                        <?php }else{?>
                                            
                                           <a class="btn btn-danger" href="login.php">Login First</a>  
                                            
                                     <?php   }?>
                                    </div>
                                </div>
                                <div id="form-messages"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
            <section class="brand2">
            <div class="container">
                <div class="row">
                   
                      <!-- Brand Area -->
                    <?php 
                    
                        include('include/brand.php') 
                    ?>

                <!-- End Brand Area -->
                </div>
            </div>
        </section>
        
        <!-- End Body Area -->

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
