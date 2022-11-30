<?php 
include('include/conn.php');
if(isset($_POST['selling']))
{

	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,md5($_POST['password']));
    $f_name = mysqli_real_escape_string($db,$_POST['f_name']);
    $company = mysqli_real_escape_string($db,$_POST['company']);
    $contact = mysqli_real_escape_string($db,$_POST['contactno']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
	$image=$_FILES["image"]["name"];
   
    
    $status="2";
    
           $checkquery=mysqli_query($db,"SELECT * FROM seller WHERE email='$email'");
            $num=mysqli_fetch_array($checkquery);
            if($num==0)
            {
            $dir="seller/images/seller image/".$email;
            if(!is_dir($dir))
                {
                    mkdir($dir);
                }

            // directory creation for product images
            move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$_FILES["image"]["name"]);
            $sql=mysqli_query($db,"insert into seller(image,username,email,password,f_name,company,contact,address,status) values('$image','$username','$email','$password','$f_name','$company','$contact','$address','$status')");
            $_SESSION['msg']="Saller Added Successfullly !!";

                if($sql)
                {
                    header("location:index.php?error=Your Request is Submitted !!");
                }else{
                    mysqli_error($db);
                }
            }else{
                
                 $msg='Email Already Taken ';
                header("location:index.php?error=Email Already Taken");
            }
    
    
}else
{
    header("location:index.php#modalsellingForm");
}
?>