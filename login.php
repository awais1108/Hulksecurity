<?php 
session_start();
include('include/conn.php');
include('include/function.php');
if(isset($_POST['recoverpassword']))
{
   $email=mysqli_real_escape_string($db,$_POST['email']);
    $contact=mysqli_real_escape_string($db,$_POST['contactno']);
    $password=md5($_POST['password']);
    $query=mysqli_query($db,"SELECT * FROM users WHERE email='$email' and contactno='$contact'");
    $num=mysqli_fetch_array($query);
    if($num>0)
    {
    mysqli_query($db,"update users set password='$password' WHERE email='$email' and contactno='$contact'");
    header("location:login.php?msg=Password Successfully Updated");
    }else
    {
    header("location:login.php?msg=Email / Contact Number not Matched");   
    }
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($db,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="index.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['uid']=$num['id'];
$_SESSION['username']=$num['name'];
$_SESSION['contactno']=$num['contactno'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($db,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$errmsg="Invalid email id or Password !!";
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
        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="index.php">Home</a></li>
                                <li class="list-inline-item"><span>||</span>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->
        <!-- Log In -->
        <section class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="n-customer">
                            <h5>New Customer</h5>
                            <p>
                            Are you new here? Sign up and login right now to send inquiries to different suppliers and get a reply back or a call from them within 24 hours & let your business expand.</p>
                            <a href="register.php">Create an Account</a>
                        </div>
                        
                        <div class="n-customer mt-5">
                            <h5>Want to Become a Seller</h5>
                            <p>
                           Do you want to create a seller account ? <a style="display: inline-block;" data-toggle="modal" data-target="#modalsellingForm" href="">Click here.</a></p>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                         <?php 
                                if(isset($errmsg))
                                {?>
                            <div class="alert alert-danger alert-dismisable">
                                <?php  echo $errmsg ;?>
                            </div>      
                            
                            <?php } if(isset($_GET['msg']) && $_GET['msg']=="Password Successfully Updated"){?>
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $_GET['msg']; ?></strong>
                            </div> 
                        <?php }
                             if(isset($_GET['msg']) && $_GET['msg']=="Email / Contact Number not Matched"){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <strong><?php echo $_GET['msg']; ?></strong>
                                    </div>
                                 <?php  }?>
                        <div class="r-customer">
                            <h5>Registered Customer</h5>
                            <p>If you have an account with us, please log in.</p>
                            <form method="post">
                                <div class="emal">
                                    <label>Email address</label>
                                    <input type="email" name="email" placeholder="Enter Email" required>
                                </div>
                                <div class="pass">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Enter Password" required >
                                </div>
                                <div class="d-flex justify-content-between nam-btm">
                                    <div>
                                        <input type="checkbox" name="rememberme" id="rmme">
                                        <label for="rmme">Remember Me</label>
                                    </div>
                                    <div>
                                        <a href="#"  data-toggle="modal" data-target="#modallost">Lost your password?</a>
                                    </div>
                                </div>
                                <button type="submit" name="login">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Log In -->

        <!-- Main Body Area-->
           
        <div class="modal fade hide" id="modallost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog bg-light" role="document">
            <div style="margin-top:100px" class="modal-content bg-light">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">

                  </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">


        <div style="flex-direction: row;" class="card bg-light">
        <div class="card-body mx-auto" style="">
                              

            <h4 class="card-title  text-center">Reset Your Password</h4>
            <form method="post"  enctype="multipart/form-data">

            <small>Enter Your Registered Email</small>
            <div style="margin-bottom:0px" class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="email" class="form-control" placeholder="Email address" type="email" required>
            </div> <!-- form-group// -->

                 <small>(format: xxxx-xxx-xxxx)</small>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input class="form-control" type="tel" pattern="^\d{4}-\d{3}-\d{4}$" onKeyPress="if(this.value.length==13) return false;"  name="contactno" placeholder="Your contact number" required>
            </div> <!-- form-group// -->
                <h5 class="text-center mb-2">Enter Your New Password</h5>
                <div style="" class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input  class="form-control" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_@./#&+-]).{8,}" title="Must contain at least one number , one uppercase , lowercase letter and a special character , and at least 8 or more characters"   placeholder="Password should be more than 8 character" id="password1" required >
                <div class="input-group-prepend">
                    <span class="input-group-text"> <a class="fa fa-eye" onclick="myFunction1()"> Show</a>  </span>
                </div>
            </div>
                <script>
                    function myFunction1(){
                        var x = document.getElementById("password1");
                                          if (x.type === "password") {
                                            x.type = "text";
                                          } else {
                                            x.type = "password";
                                          }
                                        }
                </script> 
                <span id="cnpas"></span>
                <div style="" class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input  class="form-control" type="password" name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_@./#&+-]).{8,}" title="Must contain at least one number , one uppercase , lowercase letter and a special character , and at least 8 or more characters" onkeyup="confirmpass()"   placeholder="Confirm Your Password should be more than 8 character" id="confirmpassword" required >
                <div class="input-group-prepend">
                    <span class="input-group-text"> <a class="fa fa-eye" onclick="myFunctionpass()"> Show</a>  </span>
                </div>
            </div>
                <script>
                    function confirmpass(){
                        var x = document.getElementById("confirmpassword");
                        var y = document.getElementById("password1");
                        var cnpas = document.getElementById("cnpas");
                         if(x.value===y.value){
                                cnpas.style.color = 'green';
                                cnpas.innerHTML = 'Password Match';
                            }else{
                                cnpas.style.color = 'red';
                                cnpas.innerHTML = 'Password Not Matching';}}

                    function myFunctionpass(){
                        var x = document.getElementById("confirmpassword");
                        if (x.type === "password")
                            {
                                x.type="text";
                            } else {
                                x.type = "password";
                                    }
                            }
                </script>
             <!-- form-group// -->                                  
            <div class="form-group">
                <button type="submit"  name="recoverpassword" class="btn btn-danger btn-block"> Password Reset  </button>
            </div> <!-- form-group// -->      
        </form>
        </div>
        </div> <!-- card.// -->


              </div>
              <div class="modal-footer d-flex justify-content-center">

              </div>
            </div>
          </div>
        </div> 
        
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
            include('include/footerlinks.php') ;
        ?>


    </body>

</html>
