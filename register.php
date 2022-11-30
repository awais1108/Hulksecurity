<?php 
session_start();
include('include/conn.php');
include('include/function.php');

if(isset($_POST['submit']))
{
 $name=mysqli_real_escape_string($db,$_POST['fullname']);
 $email=mysqli_real_escape_string($db,$_POST['emailid']);
 $contactno=mysqli_real_escape_string($db,$_POST['contactno']);
 $password=mysqli_real_escape_string($db,md5($_POST['password']));
 $conpass=mysqli_real_escape_string($db,md5($_POST['confirmpassword']));
    if($password==$conpass)
    {
        //$password=md5($_POST['password']);
        
        $checkquery=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$num=mysqli_fetch_array($checkquery);
if($num==0)
{
   $query=mysqli_query($db,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
        if($query)
        {
            $msg="You are successfully register";
            header("location:login.php", true, 303);
        }
        else{
            $msg='Not register something went worng';
           //die(mysqli_error($db));
        }
    }
    else
    {
       $msg='Email Already Taken ';
        
    }
}
    else
    {
        $msg='Password not Match ';
        
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
          //  include('include/menubar.php') 
        ?>
        <!-- End Menu Area-->

  <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Register -->
        <section class="register">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#"  method="post">
                            <?php 
                                if(isset($msg))
                                {?>
                            <div class="alert alert-danger alert-dismisable">
                                <?php  echo $msg;?>
                            </div>      
                            
                            <?php }
                            ?>
                            
                            <h5>Create Your Account</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Full Name*</label>
                                    <input type="text" name="fullname" placeholder="Your first name" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="emailid" placeholder="Your email address" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Contact Number*  (format: xxxx-xxx-xxxx):</label>
                                    <input type="text" pattern="^\d{4}-\d{3}-\d{4}$" onKeyPress="if(this.value.length==13) return false;"  name="contactno" placeholder="Your contact number" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Password*</label>
                                    <div class="form-group">
                                    <input style="margin-bottom: 15px;" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_@./#&+-]).{8,}" title="Must contain at least one number , one uppercase , lowercase letter and a special character , and at least 8 or more characters"   placeholder="Password should be more than 8 character" id="password" required >
                                    <input  type="checkbox" onclick="myFunction()">Show Password
                                    </div>
                                </div>
                                <script>
                                function myFunction() {
                                  var x = document.getElementById("password");
                                  if (x.type === "password") {
                                    x.type = "text";
                                  } else {
                                    x.type = "password";
                                  }
                                }
                                </script>
                                <div class="col-md-12">
                                    <label>Confirm Password*</label>
                                    <div class="form-group">
                                    <input style="margin-bottom: 15px;" type="password" name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_@./#&+-]).{8,}" title="Must contain at least one number , one uppercase , lowercase letter and a special character , and at least 8 or more characters"  placeholder="Confirm your password" id="confirmpassword" required >
                                    <input  type="checkbox" onclick="CPFunction()">Show Password
                                    </div>
                                </div>
                                <script>
                                function CPFunction() {
                                  var y = document.getElementById("confirmpassword");
                                  if (y.type === "password") {
                                    y.type = "text";
                                  } else {
                                    y.type = "password";
                                  }
                                }
                                </script>
                                <div class="col-md-7">
                                    <div>
                                        <input type="checkbox" name="t-box" id="t-box" required>
                                        <label for="t-box">I have read the terms and condition.</label>
                                    </div>
                                </div>
                                <div class="col-md-5 text-right">
                                    <button type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register -->

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
            include('include/footer.php'); 
        ?>
                              
        <!-- End Footer Area -->


        <!--
        JavaScript Files

        -->

             <?php 
            //Header section
            include('include/footerlinks.php');
        ?>
    

    </body>

</html>
