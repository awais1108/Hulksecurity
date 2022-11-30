
<div class="modal fade hide" id="modalsellingForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
    <?php if(isset($error) && $error=="Email Already Taken"){ ?>
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $error; ?></strong>
                            </div>
                         <?php  }elseif(isset($error) && $error=="Your Request is Submitted !!") {?>
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php echo $error; ?></strong>
                            </div>
                         <?php  }?>
    
	<h4 class="card-title  text-center">Create Account</h4>
	<p class="text-center">Start Selling  with your free account</p>
	<form method="post" action="sellingform.php" enctype="multipart/form-data">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="f_name" class="form-control" placeholder="Full name" type="text" required>
    </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="User name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div style="margin-bottom:0px" class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input  class="form-control" type="password" name="password" pattern=".{8,}" title="Must contain at least 8 or more characters"   placeholder="Password should be more than 8 character" id="password" required >
        <div class="input-group-prepend">
		    <span class="input-group-text"> <a class="fa fa-eye" onclick="myFunction()"> Show</a>  </span>
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
        
         <small>(format: xxxx-xxx-xxxx)</small>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input class="form-control" type="text" pattern="^\d{4}-\d{3}-\d{4}$" onKeyPress="if(this.value.length==13) return false;"  name="contactno" placeholder="Your contact number" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
        <input name="company" class="form-control" placeholder="Company Name" type="text" required>
	</div> 
        <small>(Office Address)</small>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
		</div>
        <textarea name="address" class="form-control"  placeholder="Describe yourself here..." required>
        </textarea>
        
	</div> 
	   <small>(Profile Picture)</small>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-picture"></i> </span>
		</div>
       <input type="file" name="image" class="form-control" required>
	</div> <!-- form-group end.// -->
     <!-- form-group// -->                                  
    <div class="form-group">
        <button type="submit"  name="selling" class="btn btn-danger btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a class="text-danger" href="seller/index.php">Log In</a> </p>                                                                 
</form>
</div>
</div> <!-- card.// -->

          
      </div>
      <div class="modal-footer d-flex justify-content-center">
       
      </div>
    </div>
  </div>
</div>