<?php 
session_start();
include("include/conn.php");
if(isset($_POST['sendinquiry']))
{
 $uid=$_SESSION['uid'];
 $pid=mysqli_real_escape_string($db,$_POST['pid']);
 $pname=mysqli_real_escape_string($db,$_POST['pname']);
 $pcode=mysqli_real_escape_string($db,$_POST['pcode']);
 $name=mysqli_real_escape_string($db,$_POST['name']);
 $email=mysqli_real_escape_string($db,$_POST['email']);
 $contactno=mysqli_real_escape_string($db,$_POST['contactno']);
 $subject=mysqli_real_escape_string($db,$_POST['subject']);
 $message=mysqli_real_escape_string($db,$_POST['message']);
$date=date('Y-m-d');

   $query=mysqli_query($db,"INSERT INTO `inquiry`(`inq_uid`,`inq_pid`, `inq_subject`, `inq_message`, `inq_name`, `inq_email`, `inq_contact`, `inq_date`)  values('$uid','$pid','$subject','$message','$name','$email','$contactno','$date')");
        if($query)
        {
            $msg="You are successfully register";
            header("location:product-detail.php?productcode=$pcode&product=$pname&msg=Inquiry Sent Succesfully !!", true, 303);
        }
        else{
          echo  $msg='Not register something went worng';
           die(mysqli_error($db));
        }
  


}
?>