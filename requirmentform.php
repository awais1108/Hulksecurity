<?php 
session_start();
include("include/conn.php");
if(isset($_POST['requirment_form']))
{
 $uid=mysqli_real_escape_string($db,$_POST['uid']);
 $requirment=mysqli_real_escape_string($db,$_POST['requirment']);
 $name=mysqli_real_escape_string($db,$_POST['name']);
 $email=mysqli_real_escape_string($db,$_POST['email']);
 $contactno=mysqli_real_escape_string($db,$_POST['contactno']);
 $roll=mysqli_real_escape_string($db,$_POST['roll']);
 $company=mysqli_real_escape_string($db,$_POST['company']);
 $page=mysqli_real_escape_string($db,$_POST['page']);
//$date=date('Y-m-d');

   $query=mysqli_query($db,"INSERT INTO `requirments`(`r_uid`,`r_requirment`, `r_name`, `r_email`, `r_company`, `r_contact`, `r_roll`) VALUES('$uid','$requirment','$name','$email','$company','$contactno','$roll')");
        if($query)
        {
            $msg="Your Requirments are Submitted";
            header("location:$page?msg=$msg#requirmentform");
        }
        else{
          echo  $msg='Sorry Something Went Wrong';
          // die(mysqli_error($db));
            header("location:$page?msg=$msg#requirmentform");
        }
  


}
?>