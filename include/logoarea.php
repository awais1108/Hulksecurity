<section class="logo-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
<!--                            <a href="index.php"><img style="height:75px;width:220px" src="images/pakmart.png" alt=""></a>-->
                          <a href="index.php"> <h2 style="color:"> <strong>Hulks Security</strong></h2></a>
                        </div>
                    </div>
                    <div class="col-md-5 padding-fix">
                        <form action="searchpage.php" method="post" class="search-bar">
                            <input type="text" name="searchbox" placeholder="Enter product/service name">
                            <button type="submit" name="searchbtn" ><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/call.png" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Call Us</span>
                                    <p>(+92) 324-0000000</p>
                                </div>
                            </div>
                            <?php 
                            if(!isset($_SESSION['uid']))
                            {
                            ?>
                            <a href="login.php">
                            <div style="padding-left:25px" class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/userlogin.png" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Login/Signup</span>
                                    <p>Click Here</p>
                                </div>
                            </div>
                            </a>
                           <?php }elseif(isset($_SESSION['uid'])){?>
                            <a href="logout.php">
                            <div style="padding-left:25px" class="call-box d-flex">
                                <div class="call-ico">
                                   <?php 
                                
                                       $string = strtoupper($_SESSION['username']);
                                        $firstCharacter = substr($string, 0, 1);
                                    echo "<h2>".$firstCharacter."</h2> ";
                                    ?>
                                </div>
                                <div class="call-content">
                                    <span>Logout</span>
                                    <p>Click Here</p>
                                </div>
                            </div>
                            </a>
                            
                            <?php }?>

    <!--                          <div class="cart-box ml-auto text-center">
                                <a href="#" class="">
                                    <img src="images/heart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                          <div class="cart-box ml-auto text-center">
                                <a href="#" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span><?php //if(isset($_SESSION['qnty'])){echo $_SESSION['qnty'];}else{ echo'0';} ?> </span>
                                </a>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

        <!-- Cart Body -->
        <div class="cart-body">
            <div class="close-btn">
                <button class="close-cart"><img src="images/close.png" alt="">Close</button>
            </div>
            <div class="crt-bd-box">
                <div class="cart-heading text-center">
                    <h5>Shopping Cart</h5>
                </div>
                <?php
if(!empty($_SESSION['cart'])){
            ?>
                <div class="cart-content">
                    <?php 
    
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($db,$sql);
			$totalprice=0;
			//$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				//$_SESSION['qnty']=$totalqunty+=$quantity;

                        ?>
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img height="50" width="50" src="admin/productimages/<?php echo $row['productName'];?>/<?php echo $row['productImage1'];?>" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#"><?php echo $row['productName']; ?></a></p>
                            <span><?php echo $quantity; ?> x <?php echo $row['productPrice']; ?></span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    
                    
				<?php } }?>
                </div>
                
                <?php }?>
                <div class="cart-btm">
                    <p class="text-right">Sub Total: <span>$398.00</span></p>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-overlay"></div>