<?php session_start();
include('include/function.php');
if(isset($_GET['page']) and isset($_GET['id']))
{
    $seller=$_GET['id'];
    $page=$_GET['page'];
    //$product=0;
 $code=decodeproductcode($page,$seller);
 // var_dump($code);
    $page=$code[0];
   $seller=$code[1];
}
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
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
                                <li class="list-inline-item"><span>||</span><?php echo $page ?></li>
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
                      <!--  <div class="category-box">
                            <div class="sec-title">
                                <h6>Categories</h6>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <?php 
                                   // categorylist();
                                    ?>
                                </div>
                            </div>
                        </div>-->
                         <div class="cat-brand">
                            <div class="sec-title">
                                <h6>
                                   Main Categories
                                </h6>
                            </div>
                            <div class="brand-box">
                                <ul class="list-unstyled">
                                    <?php 
                                    
                                    
                                        
                                         productMainCategoryList();
                                    ?>
                                </ul>
                            </div>
                        </div>
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
<!--
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#grid"><i class="fa fa-th-large"></i></a>
                                        </li>
-->
<!--
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                                        </li>
-->
                                    </ul>
                                </div>
<!--
                                <div class="sortby">
                                    <span>Sort By</span>
                                    <select class="sort-box">
                                        <option>Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                        <option>Rating</option>
                                    </select>
                                </div>
                                <div class="show-item">
                                    <span>Show</span>
                                    <select class="show-box">
                                        <option>12</option>
                                        <option>24</option>
                                        <option>36</option>
                                    </select>
                                </div>
                                <div class="page">
                                    <p>Page 1 of 20</p>
                                </div>
                            
-->
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel">
                                    <div class="row">
                                       <?php 
                                        
                                        if(isset($page) and $page=="seller")
                                        {
                                            
                                            sellerproduct($seller, $offset,$no_of_records_per_page,$pageno);
                                        }
                                        else
                                        {
                                           
                                          echo '<h2 class="text-danger">No Product Found !!</h2>';
                                        }
                                        
                                        ?>
                                        
                                    </div>
                                </div>
                                
                               <!-- <div class="tab-pane fade" id="list" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" src="images/tab-1.png" alt="">
                                                            <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                            <span class="sale">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                                </ul>
                                                                <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                                    <li class="list-inline-item">$120.00</li>
                                                                    <li class="list-inline-item">$150.00</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                                            <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" src="images/tab-2.png" alt="">
                                                            <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                                </ul>
                                                                <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                                    <li class="list-inline-item">$120.00</li>
                                                                    <li class="list-inline-item">$150.00</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                                            <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" src="images/tab-3.png" alt="">
                                                            <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                            <span class="new">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                                </ul>
                                                                <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                                    <li class="list-inline-item">$120.00</li>
                                                                    <li class="list-inline-item">$150.00</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                                            <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" src="images/tab-4.png" alt="">
                                                            <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                                </ul>
                                                                <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                                    <li class="list-inline-item">$120.00</li>
                                                                    <li class="list-inline-item">$150.00</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem atque dolores aliquid culpa maiores beatae est quod officia veniam fugit? Molestiae, illum voluptatibus nisi error recusandae cum expedita. Laborum, expedita!</p>
                                                            <a href="#" class="it-cart"><span class="it-img"><img src="images/it-cart.png" alt=""></span><span class="it-title">Add To Cart</span></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                           <!-- <div class="pagination-box text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#">1</a></li>
                                    <li class="list-inline-item"><a href="#">2</a></li>
                                    <li class="active list-inline-item"><a href="#">3</a></li>
                                    <li class="list-inline-item"><a href="#">4</a></li>
                                    <li class="list-inline-item"><a href="#">...</a></li>
                                    <li class="list-inline-item"><a href="#">12</a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
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


        <!-- =========================================
        JavaScript Files
        ========================================== -->

             <?php 
            //Header section
            include('include/footerlinks.php') 
        ?>


    </body>

</html>
