<?php 
session_start();
include('include/function.php');
include('include/conn.php');

if(isset($_POST['submit']))
{
    if(isset($_SESSION['uid']))
{
	$qty=$_POST['star'];
	$pid=$_POST['pid'];
	$name=$_POST['name'];
	$summary=$_POST['email'];
	$review=$_POST['review'];
	$query=mysqli_query($db,"insert into productreviews(productId,userid,quality,name,summary,review) values('$pid','".$_SESSION['uid']."','$qty','$name','$summary','$review')");
    if($query)
    {
       $msg=" Review SuccessFully Added";
    }
    else
    {
       $msg="Sign in to Your Account For Add Comments";
    }
}
    
}
if(isset($_GET['msg']) and $_GET['msg'] =='You Requirments are Submitted' )
{
    $msg=$_GET['msg'];   
} elseif(isset($_GET['msg']) and $_GET['msg'] =='Sorry Something Went Worng')
{
    
   $msg=$_GET['msg'];
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<?php 
    //Header section
    include('include/headerlinks.php');
    
if(isset($_GET['msg']) and $_GET['msg'] =='Inquiry Sent Succesfully !!'){
    $msg=$_GET['msg'];
    
}   
if(isset($_GET['productcode']) and isset($_GET['product'])){
    $productcode=$_GET['productcode'];
    $product=$_GET['product'];
 $code=decodeproductcode($product,$productcode);
 // var_dump($code);
    $product=$code[0];
   $productcode=$code[1];
    }

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
                                <li class="list-inline-item"><a href="index.php">Home</a></li>
                                <li class="list-inline-item"><span>||</span>Product Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Single Product Area -->
        <section class="sg-product">
            <div class="container">
                 <?php if(isset($msg)){ ?>
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $msg; ?></strong>
                            </div>
                         <?php  } ?>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                           
                            
                            <?php
                            if(isset($productcode))
                            {
                            $productcode=intval($productcode);
                            productdetail($productcode);
                            }
                            
                            ?>
                            <div class="col-md-12">
                                <div class="sim-pro">
                                    <div class="sec-title">
                                        <h5>Similar Product</h5>
                                    </div>
                                    <div class="sim-slider owl-carousel">
                                        
                                    
                                        <?php 
                                        //echo $productcode;
                                       similarproducts($productcode);
                                        
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <?php 
                        sellerdetail($productcode);
                        ?>
                        <div class="ht-offer">
                           
                            <section class="productQuoteRegister quote-now" style="">
                                  <?php if(isset($msg)){ ?>
                            <div class="alert alert-primary alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $msg; ?></strong>
                            </div>
                               <?php  } ?>
                                <h6 style="">
                                    Tell Us What You <span style="">NEED</span>
                                </h6>
                                <form method="POST" name="quoteForm" action="requirmentform.php">
                                    <div class="form-row ">
                                        <div class="col-sm-12">
                                            <label>Requirements</label>
                                            <input type="text" name="requirment" class="form-control" placeholder="Enter product/service name" title="Comma seperated keywords" autocomplete="off" required="" aria-required="true">
                                            <input type="hidden" name="page" class="form-control" value="index.php">
                                            <input type="hidden" name="uid" class="form-control" value="<?php if(isset($_SESSION['uid'])){echo $_SESSION['uid'];}else{ echo "";} ?>" >
                                        </div> 
                                        <div class="col-sm-6">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{ echo "";} ?>" title="Please enter your Full Name here" autocomplete="name" required="" aria-required="true">
                                        </div> 
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="name@company.com" value="<?php if(isset($_SESSION['login'])){echo $_SESSION['login'];}else{ echo "";} ?>" title="Please enter your Email Address here" autocomplete="email" required="" aria-required="true">
                                        </div> 
                                        <div class="col-sm-6">
                                            <label>Company</label>
                                            <input type="text" name="company" class="form-control" placeholder="Company Name" title="Please enter your Company Name here" autocomplete="organization" required="required" aria-required="true">
                                        </div> 
                                        <div class="col-sm-6">
                                            <label>Contact </label>
                                            <div class="iti iti--allow-dropdown">

                                                <input type="text" pattern="^\d{4}-\d{3}-\d{4}$" onKeyPress="if(this.value.length==13) return false;"  name="contactno" placeholder="Your contact number" class="form-control tel"  title="Please enter your Phone or Mobile Number here"  required="" autocomplete="off" aria-required="true">
                                                <small>(format: xxxx-xxx-xxxx)</small>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <label>I am a</label>
                                            <select class="form-control" name="roll" required="" aria-required="true">
                                                <option value="seller" selected="">Seller</option>
                                                <option value="buyer">Buyer</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-p-0 text-center">
                                            <?php  if(!isset($_SESSION['uid']))
                                        {  ?>
                                            <a href="login.php" class="btn btn-block btn-danger text-white btn-outline-danger" style="">LogIn </a>
                                        <?php }else{?>    
                                            
                                            <button type="submit" name="requirment_form" class="btn btn-outline-danger" style="">Submit</button>
                                            <?php }?>
                                        </div>
                                     
                                    </div>
                                </form>
                        </section>
                
                        </div>
<!--
                        <div class="category-box mt-1">
                            <div class="sec-title">
                                <h6>Categories</h6>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <?php 
                                    categorylist();
                                    ?>
                                </div>
                            </div>
                        </div>
-->
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
<!--
                        <div class="add-box">
                            <a href="#"><img src="images/s-banner1.jpg" alt="" class="img-fluid"></a>
                        </div>
-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Product Area -->

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
