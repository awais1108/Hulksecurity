<section  class="container mb-2 my-5">
    <div class="box-shadow" style="">
         <?php if(isset($msg)){ ?>
                            <div class="alert alert-primary alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $msg; ?></strong>
                            </div>
            <?php  } ?>
        <div class="row">
            <div class="col-md-7">
                <h3 class="top-heading text-uppercase" style="">Can't find the <span style="">product / buyer</span> that meets your requirement exactly?</h3>
                <div class="row">
                    <div class="col-md-6 pr-md-2">
                        <div class="connect-buyer text-center" style="">
                            <img src="images/trade-with-confidence.svg" alt="Trade with Confidence" class="lazy" width="80" height="80" style="">
                            <h6 class="text-uppercase">Trade with <br><span>Confidence</span></h6>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-2">
                        <div class="connect-buyer text-center" style="">
                            <img src="images/free-quotes-from-sellers.svg" alt="Free quotes from Sellers" class="lazy" width="80" height="80" style="">
                            <h6 class="text-uppercase">Free quotes from <br><span>Sellers</span></h6>
                        </div>
                    </div>
                    <div class="col-md-6 pr-md-2">
                        <div class="connect-buyer text-center" style="">
                            <img src="images/verified-connected-buyers.svg" alt="Verified Connected Buyers" class="lazy" width="80" height="80" style="">
                            <h6 class="text-uppercase">Verified Connected <br><span>Buyers</span></h6>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-2">
                        <div class="connect-buyer text-center" style="">
                            <img src="images/24-7-help-center.svg" alt="24/7 Help Center" class="lazy" width="80" height="80" style="">
                            <h6 class="text-uppercase">24/7 <br><span>Help Center</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                
                    <section class="mt-2 productQuoteRegister quote-now" style="">
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
<!--                                        <p class="text-center"><span>*</span> To achieve our mission we provide all the necessary functionalities to buyers and sellers that help them in developing the voice of their business and to expand worldwide.</p>  -->
                                    </div>
                                </form>
                      
    </section>
                
            </div>
        </div>
    </div>
</section>